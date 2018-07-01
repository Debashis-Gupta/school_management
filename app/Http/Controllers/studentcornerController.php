<?php

namespace App\Http\Controllers;

class studentcornerController extends Controller
{
  public function fees()
  {
    return view('student_corner/fees');
  }
  public function profile()
  {
    return view ('student_corner/profile');
  }
  public function result()
  {
    return view('student_corner/result');
  }
  public function transportation()
  {
    return view('student_corner/transportation');
  }
  public function uniform()
  {
    return view('student_corner/uniform');
  }


}
