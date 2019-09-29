<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\StoreEmployee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(5);
        return view('employee.index', compact('employees'));
    }

    public function getByID($id)
    {
        $employee = Employee::find($id);
        return $employee;
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(StoreEmployee $storeEmployee)
    {

        $data = $storeEmployee->all();
        $employee = new Employee();
        $employee->create($data);

        return redirect()->route('employee.index');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        return view('employee.edit', compact('employee'));
    }

    public function update(StoreEmployee $storeEmployee, $id)
    {
        $employee = Employee::find($id);
        $data = $storeEmployee->all();
        $employee->update($data);

        return redirect()->route('employee.index');
    }

    public function delete($id)
    {
        $employee = Employee::find($id);

        return view('employee.delete', compact('employee'));
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employee.index');
    }

    public function search(Request $request)
    {
        $employees = Employee::where('name', 'LIKE', '%'. $request->search . '%')
            ->orWhere('id', 'LIKE', '%'. $request->search . '%')
            ->paginate(5);

        return view('employee.index', compact('employees'));
    }
}
