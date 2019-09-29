<?php


namespace App\Http\Services\Impl;

use App\Http\Repositories\Eloquent\CustomerEloquentRepository;
use App\Http\Services\Intf\CustomerServiceInterface;

class CustomerServiceImpl implements CustomerServiceInterface
{
    protected $customerRepository;

    public function __construct(CustomerEloquentRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        return $this->customerRepository->getAll();
    }

    public function findById($id)
    {
        $customer = $this->customerRepository->findById($id);

        $statusCode = 200;
        if(!$customer)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'customers' => $customer
        ];
        return $data;
    }

    public function create($request)
    {
        $customer = $this->customerRepository->create($request);

        $statusCode = 201;
        if(!$customer)
            $statusCode = 500;

        $data = [
            'statusCode' => $statusCode,
            'customers' => $customer
        ];
        return $data;
    }

    public function update($request, $id)
    {
        $oldCustomer = $this->customerRepository->findById($id);

        if($oldCustomer){
            $newCustomer = null;
            $statusCode = 404;
        }else{
            $newCustomer = $this->customerRepository->update($request, $oldCustomer);
            $statusCode = 200;
        }

        $data = [
            'statusCode' => $statusCode,
            'customer' => $newCustomer
        ];

        return $data;
    }

    public function destroy($id)
    {
        $customer = $this->customerRepository->findById($id);

        $statusCode = 404;
        $message =  "User not found";
        if($customer){
            $this->customerRepository->destroy($customer);
            $statusCode = 200;
            $message = 'Delete success!';
        }

        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];

        return $data;
    }
}
