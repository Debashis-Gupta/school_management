<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teachercornerController extends Controller
{
    public function teacher_notice()
    {
      return view('teacher_corner/teacher_notice');
    }
    public function teacher_information()
    {
      return view('teacher_corner/teacher_information');
    }
    public function assistment_class()
    {
      return view ('teacher_corner/assistment_class');
    }
}
