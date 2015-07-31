<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function showStudent()
    {
        $student = Student::all();
        return view('pages.student',['studentview'=>$student]);
    }

   
}
