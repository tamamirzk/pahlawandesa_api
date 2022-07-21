<?php

namespace App\Http\Requests;

use App\Models\Seller;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SellerPatchRequest
{
    public function __construct($data)
    {
        if (empty($data)) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Request was empty');
        }

        $validator = Validator::make($data, [
            "store_name" => "",
            "name" => "",
            "address" => "",
            "phone_number" => "",
            "email" => "",
            "district_id" => "",
            "sub_district_id" => "",
            "village_id" => "",
        ]);

        if ($validator->fails())
            throw new ValidationException($validator, $validator->errors(), 'fail');

        $this->map((object)$data);
    }

    private function map($object)
    {
        $this->store_name = property_exists($object, 'store_name') ? $object->store_name : null;
        $this->name = property_exists($object, 'name') ? $object->name : null;
        $this->address = property_exists($object, 'address') ? $object->address : null;
        $this->phone_number = property_exists($object, 'phone_number') ? $object->phone_number : null;
        $this->email = property_exists($object, 'email') ? $object->email : null;
        $this->district_id = property_exists($object, 'district_id') ? $object->district_id : null;
        $this->sub_district_id = property_exists($object, 'sub_district_id') ? $object->sub_district_id : null;
        $this->village_id = property_exists($object, 'village_id') ? $object->village_id : null;
    }

    public function parse()
    {
        $result = array(
            'store_name' => $this->store_name,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'address' => $this->address,
            'district_id' => $this->district_id,
            'sub_district_id' => $this->sub_district_id,
            'village_id' => $this->village_id,
        );

        return array_filter($result, function ($value) {
            return !empty($value);
        });
    }
}