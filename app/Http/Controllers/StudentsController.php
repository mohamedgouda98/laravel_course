<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Faker\Factory;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function getAllStudents()
    {
        return Student::all();
    }

    public function getStudent($id)
    {
        return Student::where('id', $id)->first();
    }

}
