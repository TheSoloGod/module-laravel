<?php

namespace App\Http\Controllers;

use App\Practice;
use Illuminate\Http\Request;
use App\Repositories\PracticeRepository;

class PracticeController extends Controller
{
    protected $practiceRepository;

    public function __construct(PracticeRepository $practiceRepository)
    {
        $this->practiceRepository = $practiceRepository;
    }

    public function index()
    {
        $practices = $this->practiceRepository->getAll();
        return view('practice.list', compact('practices'));
    }

    public function create()
    {
        return view('practice.create');
    }

    public function store(Request $request)
    {
        //cach 1:
//        $practice = new Practice();
//        $practice->name = $request->input('name');
//        $practice->dob = $request->input('dob');
//        $practice->email = $request->input('email');
//        $practice->save();
//        return redirect()->route('');

        //cach 2
        $data = $request->all();
        $this->practiceRepository->create($data);
        return view('practice.list');
    }

    public function edit($id)
    {
        $practice = $this->practiceRepository->find($id);
        return view('practice.edit', compact('practice'));
    }

    public function update(Request $request, $id)
    {
        //cach 1
//        $practice = $this->practiceRepository->find($id);
//        $practice->name = $request->input('name');
//        $practice->dob = $request->input('dob');
//        $practice->email = $request->input('email');
//        $practice->save();
//        return redirect()->route('');

        //cach 2
        $data = $request->all();
        $this->practiceRepository->update($data, $id);
        return view('practice.list');
    }

    public function destroy($id)
    {
        $this->practiceRepository->delete($id);
        return back();
    }
}
