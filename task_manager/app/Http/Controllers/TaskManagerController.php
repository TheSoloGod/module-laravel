<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskManagerController extends Controller
{
    public function index(){
        return view('modules.customer.index');
    }

    public function create(){
        return view('modules.customer.create');
    }

    public function destroy(){
        return view('modules.customer.destroy');
    }

    public function update(){
        return view('modules.customer.update');
    }
}
