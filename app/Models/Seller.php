<?php   
namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Transformers\Management\SellerTransformer;

class Seller extends Model
{
    use Filterable, SoftDeletes;

    protected $defaultSort = 'asc';
    protected $defaultKey = 'id';

    protected $fillable = [
        'user_id',
        'status',
        'store_name',
        'name',
        'guid',
        'phone_number',
        'email',
        'address',
        'district_id',
        'sub_district_id',
        'village_id',
        'deleted_at',
    ];

    protected $dates = [
       'created_at',
       'updated_at',
   ];

    public function getKeyName() { return $this->defaultKey; }
    public function getSortDirection() { return $this->defaultSort; }


    public static function getSellerGuid($seller_id)
    {
        return Seller::where('id', $seller_id)->get()[0]->guid;
    }

    public static function getSellerList()
    {
        $query = Seller::where('user_id', Auth::user()->id)->get();
        return fractal($query, new SellerTransformer())->toArray()['data'];
    }

    public static function getBank($seller_guid)
    {
        $bank = BankAccount::where('seller_guid', $seller_guid)->first();
        if($bank){ 
            $data = ['id' => $bank->id, 'bank_name' => $bank->bank_name, 'account_name' => $bank->account_name, 'account_number' => $bank->account_number];
        }else{
            $data = ['id' => null, 'bank_name' => null, 'account_name' => null, 'account_number' => null];
        };
        return $data;
    }
    
    public static function createGuid()
    {
        $guid = '';
        $namespace = rand(11111, 99999);
        $uid = uniqid('', true);
        $data = $namespace;
        $data .= $_SERVER['REQUEST_TIME'];
        $data .= $_SERVER['HTTP_USER_AGENT'];
        $data .= $_SERVER['REMOTE_ADDR'];
        $data .= $_SERVER['REMOTE_PORT'];
        $hash = strtoupper(hash('ripemd128', $uid . $guid . md5($data)));
        $guid = substr($hash,  0,  8) . '-' .
                substr($hash,  8,  4) . '-' .
                substr($hash, 12,  4) . '-' .
                substr($hash, 16,  4) . '-' .
                substr($hash, 20, 12);

        return Seller::checkGuidExist($guid);
    }
    
    public static function checkGuidExist($guid)
    {
        $query_user_guid = User::where('guid', $guid)->get();
        $query_seller_guid = Seller::where('guid', $guid)->get();
        if(count($query_user_guid) == 0 AND count($query_seller_guid) == 0) {
            $user_guid = $guid;
        } else {  $this->createGuid(); }
        
        return $user_guid;
    }
}