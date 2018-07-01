<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class photogalleryController extends Controller
{
    public function award()
    {
      return view('photo_gallery/award');
    }
    public function cultural()
    {
      return view('photo_gallery/cultural');
    }
    public function inaguration()
    {
      return view('photo_gallery/inaguration');
    }
}
