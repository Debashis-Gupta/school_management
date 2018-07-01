<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
  return view('welcome');
});
Route::get('/tell','aboutController@index');

Route::get('/about',function(){
  return view('about');
});

Route::get('/about/introduction',function(){
  return view('about');
});

Route :: get('/about/infrastructure','aboutController@infrastructure');
Route :: get('/about/cbse_proforma','aboutController@cbse_proforma');
Route :: get('/about/minister_message','aboutController@minister_message');
Route :: get('/about/chairperson_message','aboutController@chairperson_message');
Route :: get('/about/head_message','aboutController@head_message');


Route::get('/academic','academicController@academic');
Route::get('/academic/calender','academicController@calender');
Route::get('/academic/class_timetables','academicController@class_timetables');
Route::get('/academic/curriculumn','academicController@curriculumn');
Route::get('/academic/syllabus','academicController@syllabus');

Route::get('/student_corner/fees','studentcornerController@fees');
Route::get('/student_corner/profile','studentcornerController@profile');
Route::get('/student_corner/result','studentcornerController@result');
Route::get('/student_corner/transportation','studentcornerController@transportation');
Route::get('/student_corner/uniform','studentcornerController@uniform');

Route::get('/teacher_corner/teacher_notice','teachercornerController@teacher_notice');
Route::get('/teacher_corner/assistment_class','teachercornerController@assistment_class');
Route::get('/teacher_corner/teacher_information','teachercornerController@teacher_information');

Route::get('/photo_gallery/award',"photogalleryController@award");
Route::get('/photo_gallery/cultural',"photogalleryController@cultural");
Route::get('/photo_gallery/inaguration',"photogalleryController@inaguration");

Route::get('/contact',function(){
  return view('contact');
});

Route:: get('/vacancy/teacher_recuritment','vacancyController@teacher_recuritment');
Route:: get('/vacancy/employee_recuritment','vacancyController@employee_recuritment');

Route ::get('/co_curriculumn','cocurriculumnController@co_curriculumn');

Route::get('/addmission/addmission_result','addmissionController@addmission_result');
Route::get('/addmission/addmission_notice','addmissionController@addmission_notice');
Route::get('/addmission/online_registration','addmissionController@online_registration');
Route::get('/addmission/apply','addmissionController@apply');

// Route for admin panel

Route::get('adminindex2','adminController@test');

Route::get('/desk',function(){
  return view('/admin/admindesk');
});
Route::get('/desk2',function(){
  return view('/admin/admin2');
});
Route::view('admin','admin.index');
// Route::view('adminindex2','admin.testy');

//eta admin er test er jonno..okane id diye puro profile show korar jonno dekate chachi
Route::get('/admin/{id}','adminController@show');
Route::get('/admin/approve/{id}','adminController@approve');
Route::post('/admin/final','bmmriController@final');

Route::get('/admin_admission','addmissionController@admin_apply');
Route::get('class_section','addmissionController@class_section');
Route::post('/admin/addclass','adminController@addclass');
Route::post('addsection','adminController@addsection');
Route::post('add_cls_sec','adminController@add_cls_sec');
Route::post('deleteclass','adminController@deleteclass');
//Route::get('/pdf/admissionform','adminController@pdf');
Route::post('blankform_admission','adminController@pdf');

Route::get('/admin/form',function(){
  return view('admin/form');
});
Route::post('/form','bmmriController@fill');

Route::get('/sample',function(){
    return view('/pdf/admissionform');
} );
// sample try
Route::post('/store','Controller@store')->name('file.store');



// admin tle test layout

Route::view('headtest','layout.headeradmin');


// blank form toiri kor
Route::view('blank','admin.blankform_admission');