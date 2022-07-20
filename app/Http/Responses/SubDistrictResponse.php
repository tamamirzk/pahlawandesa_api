<?php

namespace App\Http\Responses;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class SubDistrictResponse
{
    public function __construct($model)
    {
        $this->id = (int)$model->id;
        $this->kabupaten_id = (int)$model->district_id;
        $this->name = $model->name;
    }


    public function serialize()
    {
        return get_object_vars($this);
    }
}