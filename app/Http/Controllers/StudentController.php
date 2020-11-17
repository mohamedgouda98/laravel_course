<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students(){
        $students = Student::get();
        return view('index', compact('students'));
    }

    public function getStudent($code){
        $student = Student::where('code', $code)->first();
        return view('show', compact('student'));
    }
}
