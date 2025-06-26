<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }
    //create controller
    public function store(Request $request)
    {
        //validate all field
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'img' => 'required'
        ]);

        // store image
        $imgName = null;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imgName);
        }
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'img' => $imgName,
        ]);
        return redirect()->route('students.index')->with('success', "Student {$student->name} add successfully");
    }

    public function edit($id)
    {
        $students = Student::findOrFail($id);
    }

}
