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

    
    public function show($id)
    {
        $student = Student::getStudent($id);
        $studentclass = $student->getStudentClass;
        return view('pages.student',['studentview'=>$student,'studentclass'=>$studentclass]);
    }

   
}
