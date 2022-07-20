<?php

namespace App\Transformers;

use App\Models\SubDistrict;
use League\Fractal\TransformerAbstract;
use App\Http\Responses\SubDistrictResponse;

class SubDistrictTransformer extends TransformerAbstract
{
    public function transform(SubDistrict $model)
    {
        $response = new SubDistrictResponse($model);

        return $response->serialize();
    }
}