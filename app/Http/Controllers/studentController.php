<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index() 
    {
        $nama = Student::get();
        return view('student', ['tugasempat'=> $nama]);
    }
}
