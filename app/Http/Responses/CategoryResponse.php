<?php

namespace App\Http\Responses;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class CategoryResponse
{
    public function __construct($model)
    {
        $url_image = env('CATEGORY_URL');

        $this->id = (int)$model->id;
        $this->name = $model->name;
        $this->slug = $model->slug;
        $this->image = $model->image ? $url_image.$model->image : null;
        $this->description = $model->description;
    }


    public function serialize()
    {
        return get_object_vars($this);
    }
}