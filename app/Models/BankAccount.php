<?php   
namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccount extends Model
{
    use SoftDeletes;

    protected $defaultKey = 'id';
    protected $defaultSort = 'asc';

    protected $fillable = [
        'seller_guid',
        'bank_name',
        'account_name',
        'account_number',
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

}