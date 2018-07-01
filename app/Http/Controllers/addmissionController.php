<?php

namespace App\Http\Controllers;

use App\section;
use App\classes;
use Illuminate\Http\Request;
use DB;

class addmissionController extends Controller
{
    public function addmission_result()
    {
      return view('/addmission/addmission_result');
    }
    public function addmission_notice()
    {
      return view('/addmission/addmission_notice');
    }
    public function online_registration()
    {
      return view('/addmission/online_registration');
    }
    public function apply()
    {

        $classes = DB::table('class')->pluck('class');
        $groups=DB::table('group')->pluck('group');
        return view('/addmission/apply', ['classes' => $classes,'groups'=>$groups]);
    }
    public function admin_apply()
    {

        $classes = DB::table('class')->pluck('class');
        $groups=DB::table('group')->pluck('group');
        return view('/admin/admin_admission', ['classes' => $classes,'groups'=>$groups]);
    }
    public function class_section(){
    	$class = new classes();
    	$classes=$class->all();
    	$section = new section();
    	$sections=$section->all();
    	$class_section = DB::select("SELECT class.class as class_name, sections.name as section_name FROM class,sections, class_sections WHERE class_sections.idclass=class.idclass AND class_sections.idsection=sections.id ");
    	
    	
    	return view('/admin/class_section',['class_section' => $class_section,'classes'=> $classes,'sections'=> $sections]);
    }

}
