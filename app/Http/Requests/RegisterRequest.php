<?php

namespace App\Http\Requests;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RegisterRequest
{
    public function __construct($data)
    {
        if (empty($data)) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Request was empty');
        }

        $validator = Validator::make($data, [
            "user_category_id" => "required",
            "full_name" => "required",
            "username" => "required|unique:users",
            "email" => "required|email|unique:users",
            "password" => "required|min:4",
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
        $this->status = 1;
        $this->province_id = 32;
        $this->user_type_id = 2;
        $this->user_category_id = property_exists($object, 'user_category_id') ? $object->user_category_id : null;
        $this->full_name = property_exists($object, 'full_name') ? $object->full_name : null;
        $this->username = property_exists($object, 'username') ? $object->username : null;
        $this->email = property_exists($object, 'email') ? $object->email : null;
        $this->password = property_exists($object, 'password') ? $object->password : null;
        $this->district_id = property_exists($object, 'district_id') ? $object->district_id : null;
        $this->sub_district_id = property_exists($object, 'sub_district_id') ? $object->sub_district_id : null;
        $this->village_id = property_exists($object, 'village_id') ? $object->village_id : null;
    }

    public function parse()
    {
        $result = array(
            'status' => $this->status,
            'user_type_id' => $this->user_type_id,
            'user_category_id' => $this->user_category_id,
            'full_name' => $this->full_name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'province_id' => $this->province_id,
            'district_id' => $this->district_id,
            'sub_district_id' => $this->sub_district_id,
            'village_id' => $this->village_id,
        );

        return array_filter($result, function ($value) {
            return !empty($value) || $value === 0;
        });
    }
}