<?php 

namespace App\Models\ModelFilters;

use EloquentFilter\ModelFilter;

class SellerFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];
    
    public function id($id)
    {
        return $this->where('user_id', '=', $id);
    }

    public function seller($seller_id)
    {
        return $this->where('id', '=', $seller_id);
    }

    public function name($name)
    {
        return $this->where('name', 'like', '%' . $name . '%');
    }
    
}
