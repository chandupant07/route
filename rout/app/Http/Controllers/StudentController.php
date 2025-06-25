<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('students.index');
    }

    //create controller
    public function create(Request $request)
    {
        //validate all field
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'img' => 'required'
        ]);

        // store image
        return view('students.create');
    }
}
