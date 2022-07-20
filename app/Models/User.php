<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\DistrictTransformer;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model
{
    use Authenticatable, Authorizable, HasFactory, Filterable;

    protected $table = "users";
    protected $primaryKey = "id";
    protected $defaultSort = 'asc';
    protected $guarded = array('id');

    protected $fillable = [
        'user_type_id',
        'user_category_id',
        'user_guid',
        'username',
        'full_name',
        'email',
        'password',
        'phone_number',
        'birthdate',
        'profile_picture',
        'profile_description',
        'address',
        'province_id',
        'district_id',
        'sub_district_id',
        'village_id',
        'catalog_url',
        'catalog_name',
        'catalog_tagline',
        'catalog_picture',
        'status',
        'token',
        'deleted_at',
     ];

     protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function getSortDirection()
    {
        return $this->defaultSort;
    }

    public function tokenRevoke(){
        $user_id = auth()->user()->id;
        if($user_id){
            $query = $this->findOrFail($user_id);
            $data = $query->toArray();
    
            if($data){
                $data['token'] = null; #jwt_edited
                $query->update($data);
                return true;
            }else{ return false; }

        }else{ return false; };
    }

    public static function getJobCategory()
    {
        $job_category = [ 
            ['name'=>'BUMDES'], 
            ['name'=>'Kelompok Usaha Bersama'], 
            ['name'=>'Koperasi'], 
            ['name'=>'UMKM'], 
            ['name'=>'Kelompok Tani'], 
            ['name'=>'Lainnya'], 
        ];
        return $job_category;
    }
    
    public static function getKabupatenList()
    {
        $query = District::get();
        $data = fractal($query, new DistrictTransformer())->toArray()['data'];
        return $data;
    }

    public static function getKecamatanList($kabupaten_id)
    {
        $query = SubDistrict::where('district_id',$kabupaten_id)->get();
        return $query;
    }
    
    public static function getVillageList($kecamatan_id)
    {
        $query = Village::where('sub_district_id',$kecamatan_id)->get();
        return $query;
    }
}
