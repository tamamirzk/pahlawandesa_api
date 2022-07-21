<?php   
namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\ProductUnitTransformer;

class ProductUnit extends Model
{
    use Filterable;

    protected $defaultSort = 'asc';
    protected $defaultKey = 'id';

    protected $fillable = [];
    

    public function getKeyName() { return $this->defaultKey; }
    public function getSortDirection() { return $this->defaultSort; }

    public static function getUnitList() {
        $query = ProductUnit::get();
        $data = fractal($query, new ProductUnitTransformer())->toArray()['data'];
        return $data;
    }

}