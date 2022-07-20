<?php

namespace App\Http\Responses;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class VillageResponse
{
    public function __construct($model)
    {
        $this->id = (int)$model->id;
        $this->kecamatan_id = (int)$model->sub_district_id;
        $this->name = $model->name;
    }


    public function serialize()
    {
        return get_object_vars($this);
    }
}