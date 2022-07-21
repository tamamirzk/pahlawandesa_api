<?php

namespace App\Http\Requests;

use App\Models\Seller;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SellerRequest
{
    public function __construct($data)
    {
        if (empty($data)) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Request was empty');
        }

        $validator = Validator::make($data, [
            "store_name" => "required",
            "name" => "required",
            "address" => "required",
            "phone_number" => "required",
            "email" => "required|email",
            "district_id" => "required",
            "sub_district_id" => "required",
            "village_id" => "required",
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

        $this->status = 1;
        $this->user_id = Auth::user()->id;
        $this->guid = Seller::createGuid();
    }

    public function parse()
    {
        $result = array(
            'user_id' => $this->user_id,
            'status' => $this->status,
            'store_name' => $this->store_name,
            'name' => $this->name,
            'guid' => $this->guid,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'address' => $this->address,
            'district_id' => $this->district_id,
            'sub_district_id' => $this->sub_district_id,
            'village_id' => $this->village_id,
        );

        return $result;
    }
}