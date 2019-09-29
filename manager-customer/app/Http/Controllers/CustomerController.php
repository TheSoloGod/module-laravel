<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customers.list',compact('customers'));
    }

    public function create(){
        return view('customers.create');
    }

    public function store(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $customer->save();
        Session::flash('success', 'Tạo mới khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function edit($id){
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->dob = $request->dob;
        $customer->save();
        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        Session::flash('success', 'Xóa khách hàng thành công');
        return redirect()->route('customers.index');
    }
}
