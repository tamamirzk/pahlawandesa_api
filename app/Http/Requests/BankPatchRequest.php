<?php

namespace App\Http\Requests;

use App\Models\Seller;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BankPatchRequest 
{
    public function __construct($data)
    {
        if (empty($data)) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Request was empty');
        }

        $validator = Validator::make($data, [
            "bank_name" => "",
            "account_name" => "",
            "account_number" => "",
        ]);

        if ($validator->fails())
            throw new ValidationException($validator, $validator->errors(), 'fail');

        $this->map((object)$data);
    }

    private function map($object)
    {
        $this->bank_name = property_exists($object, 'bank_name') ? $object->bank_name : null;
        $this->account_name = property_exists($object, 'account_name') ? $object->account_name : null;
        $this->account_number = property_exists($object, 'account_number') ? $object->account_number : null;
    }

    public function parse()
    {
        $result = array(
            'bank_name' => $this->bank_name,
            'account_name' => $this->account_name,
            'account_number' => $this->account_number,
        );

        $data = array_filter($result, function ($value) { return !empty($value); });
        return count($data) == 0 ? null: $data;
    }
}