<?php

namespace App\Transformers;

use App\Models\District;
use League\Fractal\TransformerAbstract;
use App\Http\Responses\DistrictResponse;

class DistrictTransformer extends TransformerAbstract
{
    public function transform(District $model)
    {
        $response = new DistrictResponse($model);

        return $response->serialize();
    }
}