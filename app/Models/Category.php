<?php   
namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\CategoryTransformer;

class Category extends Model
{
    use Filterable;

    protected $fillable = [];
    
    protected $defaultSort = 'asc';
    public function getSortDirection() { return $this->defaultSort; }

    
    public static function getCategoryList()
    {
        $query = Category::get();
        $data = fractal($query, new CategoryTransformer())->toArray()['data'];
        return $data;
    }
}