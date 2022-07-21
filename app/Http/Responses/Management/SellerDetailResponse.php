<?php

namespace App\Http\Responses\Management;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class SellerDetailResponse
{
    public function __construct($model)
    {
        $this->id = (int)$model->id;
        $this->name = $model->name;
        $this->store_name = $model->store_name;
        $this->address = $model->address;
        $this->email = $model->email;
        $this->phone_number = $model->phone_number;
        $this->district_id = (int)$model->district_id;
        $this->sub_district_id = (int)$model->sub_district_id;
        $this->village_id = (int)$model->village_id;
        $this->bank = $model->getBank($model->guid);
    }


    public function serialize()
    {
        return get_object_vars($this);
    }
}