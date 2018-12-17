<?php
namespace App\Controllers;
use App\Models\Student;

class StudentController
{
    public function index($request, $response)
    {
       var_dump(Student::all());
    }

}