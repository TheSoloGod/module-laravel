<?php

namespace App\Http\Controllers;

use App\Services\CityServicesInterface;
use App\Services\StudentServicesInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $studentServices;
    protected $cityServices;

    public function __construct(StudentServicesInterface $studentServices,
                                CityServicesInterface $cityServices)
    {
        $this->studentServices = $studentServices;
        $this->cityServices = $cityServices;
    }

    public function index()
    {
        $cities = $this->cityServices->getAll();
        $students = $this->studentServices->paginate();
        return view('student.list', compact('students', 'cities'));
    }

    public function create()
    {
        $cities = $this->cityServices->getAll();
        return view('student.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $this->studentServices->create($request);
        return redirect()->route('student.list');
    }

    public function edit($id)
    {
        $cities = $this->cityServices->getAll();
        $student = $this->studentServices->getByID($id);
        return view('student.edit', compact('student', 'cities'));
    }

    public function update(Request $request)
    {
        $this->studentServices->update($request);
        return redirect()->route('student.list');
    }

    public function delete($id)
    {
        $student = $this->studentServices->getByID($id);
        return view('student.delete', compact('student'));
    }

    public function destroy(Request $request)
    {
        $this->studentServices->delete($request);
        return redirect()->route('student.list');
    }

    public function filterByCity($city_id)
    {
        $cities = $this->cityServices->getAll();
        $students = $this->studentServices->filterByCity($city_id);
        return view('student.list', compact('students', 'cities'));
    }

    public function paginate()
    {
        $cities = $this->cityServices->getAll();
        $students = $this->studentServices->paginate();
        return view('student.list', compact('students', 'cities'));
    }
}
