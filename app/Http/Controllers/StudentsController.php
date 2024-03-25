<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
    {
        // $data = Students::all();

      $data = DB::table("Students")->select("first_name" , "last_name", "email")->get();
      dd($data);

      

        return view('students.index', ['students' => $data]);

  
    }
}

