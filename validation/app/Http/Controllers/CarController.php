<?php

namespace App\Http\Controllers;

use App\Car;
use App\Repositories\CarRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    protected $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    public function index()
    {
        if (Auth::check()) {
            $cars = $this->carRepository->all();
            return view('list', compact('cars'));
        }

        return redirect()->route('login');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|alpha',
            'price' => 'required|numeric'
        ]);
        if($validatedData) {
            $this->carRepository->store($request);
            return redirect()->route('car.index');
        }
    }
}
