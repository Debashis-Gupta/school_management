<?php
	
	namespace App\Http\Controllers;
	
	
	use App\class_section;
	use App\classes;
	use App\section;
	use App\two;
	use Barryvdh\DomPDF\PDF;
	use DB;
	use App\Quotation;
	use App\Student;
	use App\teacher;
	use App\admission_request;
	use Dompdf\Dompdf;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\App;
	
	class adminController extends Controller {
		function fill( Request $req ) {
			$academic = $req->input( 'academic' );
			$section  = $req->input( 'section' );
			$name     = $req->input( 'name' );
			$father   = $req->input( 'father' );
			$roll     = $req->input( 'roll' );
			$mother   = $req->input( 'mother' );
			$gender   = $req->input( 'gender' );
			$mobileno = $req->input( 'mobileno' );
			$religion = $req->input( 'religion' );
			$address  = $req->input( 'address' );
			
			$std           = new Student();
			$std->academic = $academic;
			$std->section  = $section;
			$std->name     = $name;
			$std->father   = $father;
			$std->roll     = $roll;
			$std->mother   = $mother;
			$std->gender   = $gender;
			$std->religion = $religion;
			$std->mobileno = $mobileno;
			$std->address  = $address;
			
			
			$std->save();
			
			$name1 = $req->input( 'teacher' );
			
			$tech       = new teacher();
			$tech->name = $name1;
			$tech->save();
			
			return "successfully";
			
			
		}
		
		public static function test( Request $request ) {
			//  $hr_request = Request::all();
			// return view('admin.test')->with('hr_request', $hr_request);
			//$classes = DB::table('admission_requests')->get();
			//$groups=DB::table('group')->pluck('group');
			//return view('admin.test', ['classes' => $classes]);
			$std = new admission_request();
//     $classes=$std->all();
			$classes = admission_request::orderBy( 'class' )->orderBy( 'admission_roll' )->get();
//        $classes= DB::table('admission_requests')
//            ->select()
//            ->groupBy('class')
//            ->get();
			return view( '/admin/admission_request', [ 'classes' => $classes ] );
		}
		
		public function show( $id ) {
			$std = new admission_request();
			$de  = $std->all()->where( 'id', '=', $id );

//        echo "name = ".$de->name;
			
			return view( 'admin.tessy', [ 'de' => $de ] );
		}
		
		public function approve( $id ) {
			$std     = new admission_request();
			$section = new section();
			$sec     = $section->all();
			
			$two = $std->all()->where( 'id', '=', $id );
			
			return view( 'admin.approve', [ "two" => $two, "sec" => $sec ] );
		}
		
		public function addclass( Request $request ) {
			$addclass        = $request->input( 'class' );
			$cls             = new classes();
			$cls->timestamps = false;
			
			$cls->class = $addclass;
			$cls->save();
			
			return view( 'admin.index' );
			
		}
		
		public function addsection( Request $request ) {
			$addsection      = $request->input( 'section' );
			$sec             = new section();
			$sec->timestamps = false;
			
			$sec->name = $addsection;
			$sec->save();
			
			return view( 'admin.index' );
			
		}
		
		public function add_cls_sec( Request $request ) {
			$cls             = $request->input( 'cls' );
			$sec             = $request->input( 'sec' );
			$add             = new class_section();
			$add->timestamps = false;
			$str             = classes::where( 'class', '=', $cls )->value( 'idclass' );
			$str2            = section::where( 'name', '=', $sec )->value( 'id' );

//    	echo $str;
//    	echo "<br>";
//	    echo "$str2";
			$add->idclass   = $str;
			$add->idsection = $str2;
			$add->save();
			
			return view( 'admin.index' );
		}
		
		public function deleteclass( Request $request ) {
			$cls = $request->input( 'cls' );
			$str = classes::where( 'class', '=', $cls )->delete();
			
			return view( 'admin.index' );
			
		}
		
		/**
		 * @param Request $req
		 */
		public function pdf( Request $req ) {
			$content = file_get_contents( 'http://localhost/bmmri-project/public/blank' );
			
			$dompdf  = new Dompdf();
			$dompdf->loadHtml( $content );
			$dompdf->render();
			$dompdf->setPaper('Legal','Portrait');
			
			return $dompdf->stream();
			
			return $pdf->download( 'admissionform.pdf' );
			
			
		}
		
		
		//			$pdf = PDF::loadView('admin/blankform_admission');
//			return $pdf->download('admin.pdf');
//        $data=['data'=>'hello'];
//			$pdfContent = file_get_contents( "http://localhost/bmmri-project/public/blank" );
//
//			$pdf = App::make('dompdf.wrapper');
//
//			$pdf->loadHTML($pdfContent);
//			//$pdf->setPaper( 'L', 'landscape' );
//			$pdf->render();
//			return $pdf->stream();
//			return $pdf->download( 'blankform_admission.pdf' );
//			//return $pdf->inline();
//		}
	}




