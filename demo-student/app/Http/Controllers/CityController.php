<?php

namespace App\Http\Controllers;

use App\Services\CityServicesInterface;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $cityServices;

    public function __construct(CityServicesInterface $cityServices)
    {
        $this->cityServices = $cityServices;
    }

    public function index()
    {
        $cities = $this->cityServices->getAll();
        return view('city.list', compact('cities'));
    }

    public function create()
    {
        return view('city.create');
    }

    public function store(Request $request)
    {
        $this->cityServices->create($request);
        return redirect()->route('city.list');
    }

    public function edit($id)
    {
        $city = $this->cityServices->getByID($id);
        return view('city.edit', compact('city'));
    }

    public function update(Request $request)
    {
        $this->cityServices->update($request);
        return redirect()->route('city.list');
    }

    public function delete($id)
    {
        $city = $this->cityServices->getByID($id);
        return view('city.delete', compact('city'));
    }

    public function destroy(Request $request)
    {
        $this->cityServices->delete($request);
        return redirect()->route('city.list');
    }
}
