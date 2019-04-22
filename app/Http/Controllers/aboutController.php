	<?php

namespace App\Http\Controllers;

class aboutController extends Controller
{
  public function index(){
    return view('about');
  }
  public function infrastructure(){
    return view('about/infrastructure');
  }
 public function cbse_proforma()
  {
    return view('about/cbse_proforma');
  }
  public function minister_message(){
    return view('about/minister_message');
  }
  public function chairperson_message(){
    return view('about/chairperson_message');
  }
  public function head_message(){
    return view('about/head_message');
  }
}
