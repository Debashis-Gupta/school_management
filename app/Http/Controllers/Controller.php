<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sample(){
      return view ('sample');
    }
    public function store(Request $request){
      /**
      * @var UploadedFile
      */
      // $file=$req->file('file');
      // $file->store('upload');

  $file = $request->file('file');
  $name = time(). $file->getClientOriginalName();
echo $name;
   $file->move('images/projects', $name);

     $data = array_merge(['photo' => "/images/projects/{$name}"], $request->all());
       $project = Project::create($data);
    }
}
