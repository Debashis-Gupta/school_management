<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vacancyController extends Controller
{
    public function teacher_recuritment()
    {
      return view('vacancy/teacher_recuritment');
    }
    public function employee_recuritment()
    {
      return view('vacancy/employee_recuritment');
    }
}
