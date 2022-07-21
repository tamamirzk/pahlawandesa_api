<?php

namespace App\Http\Responses\Management;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class SellerResponse
{
    public function __construct($model)
    {
        $this->id = (int)$model->id;
        $this->name = $model->name;
        $this->store_name = $model->store_name;
        $this->email = $model->email;
        $this->phone_number = $model->phone_number;
    }


    public function serialize()
    {
        return get_object_vars($this);
    }
}