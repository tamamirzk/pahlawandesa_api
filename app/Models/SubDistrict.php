<?php   
namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    protected $fillable = [];
    
    protected $defaultSort = 'asc';

    public function getSortDirection()
    {
        return $this->defaultSort;
    }

}