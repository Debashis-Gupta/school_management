<?php

namespace App\Http\Controllers;

class academicController extends Controller
{
  public function academic()
  {
    return view('academic');
  }
  public function calender()
  {
    return view('academic/calender');
  }
  public function class_timetables()
  {
    return view('academic/class_timetables');

  }
  public function syllabus()
  {
    return view('academic/syllabus');
  }
  public function curriculumn()
  {
    return view('academic/curriculumn');
  }
}
