<?php

namespace App\Repositories;

use App\Models\Seller;
use App\Models\BankAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Contracts\ISellerRepository;

class SellerRepository extends GenericRepository implements ISellerRepository
{
    public function __construct()
    {
        parent::__construct(app(Seller::class));
    }

    public function getSeller($id)
    {        
        $data = [
            'seller' =>  $id,
        ];

        return $this->model->filter($data)->get();
    }
    
    public function getSellers($order, $sort, $filter, $page, $limit)
    {        
        $orderBy = $order ? $order : $this->model->getKeyName();
        $sortBy = $sort ? $sort : $this->model->getSortDirection();

        $data = [
            'id' =>  Auth::user()->id,
            'name' =>  $filter,
        ];

        return $this->model->filter($data)
            ->orderBy($orderBy, $sortBy)
            ->limit($limit)
            ->paginate($limit);
    }
    
    public function getSellersAll($order, $sort, $filter)
    {
        $orderBy = $order ? $order : $this->model->getKeyName();
        $sortBy = $sort ? $sort : $this->model->getSortDirection();

        $data = [
            'id' =>  Auth::user()->user_id,
            'name' =>  $filter,
            'deleted' =>  0,
        ];

        return $this->model
        ->filter($data)
        ->orderBy($orderBy, $sortBy)->get();
    }
    
    public function createBank($data, $seller_guid)
    {
        $data['seller_guid'] = $seller_guid;
        return BankAccount::create($data);
    }
    
    public function updateBank($data, $id)
    {
        $seller = $this->model->find($id);
        $bank = BankAccount::where('seller_guid', $seller->guid)->first();
        if($bank){
            return BankAccount::where('seller_guid', $seller->guid)->update($data);
        }else{
            return $this->createBank($data, $seller->guid);
        }
    }

    public function deleteBank($seller_guid)
    {       
        $bank = BankAccount::where('seller_guid', $seller_guid)->first();
        $delete_bank = $bank ? $bank->delete() : true;
        return true;
    }

    public function deleteSeller($seller_id)
    {       
        $seller = $this->model->find($seller_id);
        $delete_seller = $seller ? $seller->delete() : true;
        $delete_bank = $seller ? $this->deleteBank($seller->guid) : true;

        return true;
    }
}