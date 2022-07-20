<?php

namespace App\Repositories;

use Exception;
use App\Models\User;
use App\Models\Seller;
use App\Mail\Welcome;
use Firebase\JWT\JWT;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ChangeEmail;
use App\Mail\ForgotPassword;
use Firebase\JWT\ExpiredException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use MikeMcLin\WpPassword\Facades\WpPassword;
use App\Repositories\Contracts\IUserRepository;

class UserRepository extends GenericRepository implements IUserRepository{
    
    public function __construct()
    {
        parent::__construct(app(User::class));
    }

    public function login(array $data){
        $check_user = $this->model->where('username', $data['username'])->first();
        $password = $data['password'];
        
        if($check_user){
            if ( password_verify($password, $check_user['password']) == true ) {
                $user_id =  $check_user->id;

            } else {
                 $user_id =  null; 
            }
            return $this->query($user_id);
            
        }else { return null;}
        
    }

    public function register(array $data){
        $email = $data['email'];
        $username = $data['username'];

        $data['user_guid'] = $this->createGuid();
        $data['catalog_name'] = $this->createCatalogName($username);
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        
        $user = $this->model->create($data);
        // Mail::to($user)->send(new Welcome($user));

        if($user){
            $user_id =  $user->id;
        } else {
            $user_id =  null; 
        }

        return $this->query($user_id);

    }

    public function emailRecovery(array $data){
        $check_user = $this->model->where('email', $data['email'])->first();
        $user = $check_user->toArray();
        $user['password'] = $data['old_password'];

        return $this->model->findOrFail($data['user_id'])->update($user);

    }

    public function verify($id){
        $data = $this->model->where('id', $id)->first();
        
        if($data){
            $user = $data->toArray();
            $user['status'] = 1; 

            $query = $this->model->findOrFail($id)->update($user);
            return $this->query($id);
        }else { return null; }

    }

    public function getToken($user_id){
        $query = $this->model->select('token')->find($user_id);
        $token = $query ? $query->toArray()['token'] : null;

        if($token){
            try { $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']); } catch(Exception $e) { $credentials = null; }
            $access_payload = $credentials ? array('exp' => $credentials->exp) : [ 'iss' => "bearer",  'sub' => $user_id, 'iat' => time(), 'exp' => time() + 60*10080 ]; //second * minutes
            $refresh_payload = [ 'iss' => "bearer",  'sub' => $user_id, 'iat' => time(), 'exp' => time() + 60*40320 ];
            $access_token = $credentials ? $token : JWT::encode($access_payload, config('services.jwt.secret'));
            $refresh_token = JWT::encode($refresh_payload, config('services.jwt.secret_refresh'));
            $update_api_token = $credentials ? null : $this->apiToken($user_id, $access_token);

        }else{
            $access_payload = [ 'iss' => "bearer",  'sub' => $user_id, 'iat' => time(), 'exp' => time() + 60*10080 ];
            $refresh_payload = [ 'iss' => "bearer",  'sub' => $user_id, 'iat' => time(), 'exp' => time() + 60*40320 ];
            $access_token = JWT::encode($access_payload, config('services.jwt.secret'));
            $refresh_token = JWT::encode($refresh_payload, config('services.jwt.secret_refresh'));
            $update_api_token = $this->apiToken($user_id, $access_token);
        }
        
        return response()->json([
            'token_type' => 'Bearer',
            'expires_in' => $access_payload['exp'],
            'access_token' => $access_token,
            'refresh_token' => $refresh_token

        ]);
        
        
    }

    public function getRefreshToken($refresh_token){
        $credentials = JWT::decode($refresh_token, config('services.jwt.secret_refresh'), ['HS256']);
        $user_id = $credentials->sub;
        if($user_id){
            return $this->getToken($user_id);
        }else{
            return null;
        }
    }

    public function apiToken($user_id, $token){
        $query = $this->model->findOrFail($user_id);
        $data = $query->toArray();
        $data['token'] = $token;
        $query->update($data);
        return $query;
    }

    public function query($user_id){  
        if($user_id){
            $query =  $this->model->where('id', $user_id)->get();
            return $query;
        }else{
            return null;
        };
        
    }

    public function userUpdate($id, array $data)
    {
        $query = $this->model->findOrFail($id);
        $password = $data['password'];

        $data_user = array(
            "first_name" => $data['first_name'],
            "last_name" => $data['last_name'],
        );
        if($password){ $data_user['password'] = Hash::make($password); }
        
        $query->update(array_filter($data_user));
        return $query;
    }
    
    public function createCatalogName($username)
    {
        $catalogName = '';
        $catalogNameTemp = '';
        $checkCatalogName = false;

        while(!$catalogName) {
            if($catalogNameTemp) {
                if(!$checkCatalogName) {
                    $querySearch = User::where('catalog_name', $catalogNameTemp)->get();
                    if(count($querySearch) == 0) {
                        $catalogName = $catalogNameTemp;
                        $checkCatalogName = true;
                    } else {
                        $userIdExplode = explode("_",$catalogNameTemp)[1]+1;
                        $catalogNameTemp = $username."_".$userIdExplode;
                    }
                }
            }else{
                $querySearch = User::where('catalog_name', $username)->get();
                
                if(count($querySearch) == 0) {
                    $catalogName = $username;
                } else {
                    $catalogNameTemp = $username."_".$querySearch[0]->user_id;
                }
            }
        }

        return $catalogName;
    }

    public function registerInfoKabupaten(){
        $job_category = User::getJobCategory();
        $kabupaten = User::getKabupatenList();

        $data = [
            'job_categories' => $job_category,
            'kabupaten' => $kabupaten,
        ];

        return $data;
    }
    
    public function registerInfoKecamatan($kabupaten_id){
        $data = User::getKecamatanList($kabupaten_id);
        return $data;
    }
    
    public function registerInfoVillage($kecamatan_id){
        $data = User::getVillageList($kecamatan_id);
        return $data;
    }
    
}