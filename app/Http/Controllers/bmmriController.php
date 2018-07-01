<?php
	
	namespace App\Http\Controllers;
	
	use App\eight;
	use App\five;
	use App\four;
	use App\kg;
	use App\nine;
	use App\nursery;
	use App\one;
	use App\play;
	use App\seven;
	use App\six;
	use App\threes;
	use App\two;
	use Barryvdh\DomPDF\PDF;
	use Dompdf\Dompdf;
	use Illuminate\Http\Request;
	use App\admission_request;
	
	class bmmriController extends Controller {
		
		public function fill( Request $req ) {
			
			
			$name        = $req->input( 'applicant_name' );
			$class       = $req->input( 'class' );
			$group       = $req->input( 'group' );
			$father_name = $req->input( 'father_name' );
			$mother_name = $req->input( 'mother_name' );
			$father_prof = $req->input( "father_prof" );
			$mother_prof = $req->input( "mother_prof" );
			$father_cell = $req->input( "father_cell" );
			$mother_cell = $req->input( "mother_cell" );
			$father_sal  = $req->input( "father_sal" );
			$mother_sal  = $req->input( "mother_sal" );
			$birthdate   = $req->input( "birthdate" );
			$religion    = $req->input( "religion" );
			$nationality = $req->input( "nationality" );
			$village     = $req->input( "village" );
			$po          = $req->input( "po" );
			$pc          = $req->input( "pc" );
			$upazilla    = $req->input( "upalzilla" );
			$dist        = $req->input( "dist" );
			$cn          = $req->input( "cn" );
			$aust        = $req->input( "aust" );
			$pi          = $req->input( "pi" );
			
			$std             = new admission_request();
			$std->timestamps = false;
			$std->name       = $name;
			$std->class      = $class;
			
			
			if ( $std->class == 'One' ) {
				$std_one = $std->where( 'class', '=', 'One' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_one['admission_roll'];
				if ( $std_one == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_one['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Two' ) {
				$std_two = $std->where( 'class', '=', 'Two' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_two['admission_roll'];
				if ( $std_two == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_two['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Three' ) {
				$std_three = $std->where( 'class', '=', 'Three' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_three['admission_roll'];
				if ( $std_three == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_three['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Four' ) {
				$std_three = $std->where( 'class', '=', 'Four' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_four['admission_roll'];
				if ( $std_one == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_four['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Five' ) {
				$std_five = $std->where( 'class', '=', 'Five' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_one['admission_roll'];
				if ( $std_five == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_five['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Six' ) {
				$std_six = $std->where( 'class', '=', 'Six' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_one['admission_roll'];
				if ( $std_six == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_six['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Seven' ) {
				$std_seven = $std->where( 'class', '=', 'Seven' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_one['admission_roll'];
				if ( $std_seven == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_seven['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Eight' ) {
				$std_eight = $std->where( 'class', '=', 'Eight' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_eight['admission_roll'];
				if ( $std_eight == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_eight['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Nine' ) {
				$std_nine = $std->where( 'class', '=', 'Nine' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_nine['admission_roll'];
				if ( $std_nine == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_nine['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Play' ) {
				$std_play = $std->where( 'class', '=', 'Play' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_one['admission_roll'];
				if ( $std_play == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_play['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'Nursery' ) {
				$std_nur = $std->where( 'class', '=', 'Nursery' )->orderby( 'id', 'desc' )->first();
//
				if ( $std_nur == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_nur['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			} elseif ( $std->class == 'K.G' ) {
				$std_kg = $std->where( 'class', '=', 'K.G' )->orderby( 'id', 'desc' )->first();
//            $prev_roll=$std_kg['admission_roll'];
				if ( $std_kg == null ) {
					$new_roll            = 1;
					$std->admission_roll = $new_roll;
				} else {
					$prev_roll           = $std_kg['admission_roll'];
					$new_roll            = $prev_roll + 1;
					$std->admission_roll = $new_roll;
				}
			}
			$std->group              = $group;
			$std->father_name        = $father_name;
			$std->father_profession  = $father_prof;
			$std->father_mobile      = $father_cell;
			$std->father_income      = $father_sal;
			$std->mother_name        = $mother_name;
			$std->mother_profession  = $mother_prof;
			$std->mother_mobile      = $mother_cell;
			$std->mother_income      = $mother_sal;
			$std->birth              = $birthdate;
			$std->religion           = $religion;
			$std->nationality        = $nationality;
			$std->autistic           = $aust;
			$std->village            = $village;
			$std->post_office        = $po;
			$std->post_code          = $pc;
			$std->distict            = $dist;
			$std->upazilla           = $upazilla;
			$std->previous_institute = $pi;
			$std->contact_no         = $cn;
			
			if ( $req->hasFile( 'image' ) ) {
				$last_id=$father_cell;
				$imagename = $last_id . '.' . $req->file( 'image' )->getClientOriginalExtension();
				$req->file( 'image' )->move(
					base_path() . '/storage/image', $imagename
				);
				
				$std->image = $imagename;
				//dd( $imagename );
			} else {
				dd( 'No image was found' );
			}
			
			$std->save();
// ekane ekta kaj korte hobe j application korbe tar id fetch korte hobe
// etar jonno admission_request er
//			$last_id   = $std->orderby( 'id', 'desc' )->first()->pluck( 'id' );
//			$imagename = $last_id . '.' . $req->file( 'image' )->getClientOriginalExtension();
//			$req->file( 'image' )->move(
//				base_path() . '/storage/image', $imagename
//			);
//			$std->image = $imagename;
//			$std->save()->where( 'id', '=', $last_id );


//        here i want to generate a pdf that when the user hit the submit button
//	    he/she will get the admit card as pdf
//      ekane name ,admission roll,image,applied class and applied group takbe
//	    start of pdf generation
			
			
			$data = [
				'name'  => $name,
				'roll'  => $new_roll,
				'group' => $group,
				'class' => $class,
				'image' =>$imagename
			];
			$content=file_get_contents('http://localhost/bmmri-project/public/blank');
			$dompdf = new Dompdf();
			$dompdf->loadHtml($content);
			$dompdf->render();
			$dompdf->setPaper('Legal','Portrait');
			return $dompdf->stream();
	  
			return $pdf->download( 'admissionform.pdf' );

//	    end of pdf generation
			
			
			return redirect( '/admin' );
			
		}
//above code for filling form


//below code is for submitting the passed student according the class
		public function final( Request $req ) {
			$name        = $req->input( 'applicant_name' );
			$id          = $req->input( 'applicant_id' );
			$roll        = $req->input( 'roll' );
			$section     = $req->input( 'section' );
			$class       = $req->input( 'class' );
			$group       = $req->input( 'group' );
			$father_name = $req->input( 'father_name' );
			$mother_name = $req->input( 'mother_name' );
			$father_prof = $req->input( "father_prof" );
			$mother_prof = $req->input( "mother_prof" );
			$father_cell = $req->input( "father_cell" );
			$mother_cell = $req->input( "mother_cell" );
			$father_sal  = $req->input( "father_sal" );
			$mother_sal  = $req->input( "mother_sal" );
			$birthdate   = $req->input( "birthdate" );
			$religion    = $req->input( "religion" );
			$nationality = $req->input( "nationality" );
			$village     = $req->input( "village" );
			$po          = $req->input( "po" );
			$pc          = $req->input( "pc" );
			$upazilla    = $req->input( "upalzilla" );
			$dist        = $req->input( "dist" );
			$cn          = $req->input( "cn" );
			$aust        = $req->input( "aust" );
			$pi          = $req->input( "pi" );
			
			
			//for class twooooooooooooooooooooooo
			if ( $class == 'One' ) {
				$one                     = new one();
				$one->timestamps         = false;
				$one->id                 = $id;
				$one->name               = $name;
				$one->class              = $class;
				$one->group              = $group;
				$one->roll               = $roll;
				$one->section            = $section;
				$one->father_name        = $father_name;
				$one->father_profession  = $father_prof;
				$one->father_mobile      = $father_cell;
				$one->father_income      = $father_sal;
				$one->mother_name        = $mother_name;
				$one->mother_profession  = $mother_prof;
				$one->mother_mobile      = $mother_cell;
				$one->mother_income      = $mother_sal;
				$one->birth              = $birthdate;
				$one->religion           = $religion;
				$one->nationality        = $nationality;
				$one->austistic          = $aust;
				$one->village            = $village;
				$one->post_office        = $po;
				$one->post_code          = $pc;
				$one->distict            = $dist;
				$one->upazilla           = $upazilla;
				$one->previous_institute = $pi;
				$one->contact_no         = $cn;
				$one->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Two" ) {
				$two                     = new two();
				$two->timestamps         = false;
				$two->id                 = $id;
				$two->name               = $name;
				$two->class              = $class;
				$two->group              = $group;
				$two->roll               = $roll;
				$two->section            = $section;
				$two->father_name        = $father_name;
				$two->father_profession  = $father_prof;
				$two->father_mobile      = $father_cell;
				$two->father_income      = $father_sal;
				$two->mother_name        = $mother_name;
				$two->mother_profession  = $mother_prof;
				$two->mother_mobile      = $mother_cell;
				$two->mother_income      = $mother_sal;
				$two->birth              = $birthdate;
				$two->religion           = $religion;
				$two->nationality        = $nationality;
				$two->austistic          = $aust;
				$two->village            = $village;
				$two->post_office        = $po;
				$two->post_code          = $pc;
				$two->distict            = $dist;
				$two->upazilla           = $upazilla;
				$two->previous_institute = $pi;
				$two->contact_no         = $cn;
				$two->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Three" ) {
				$three                     = new threes();
				$three->timestamps         = false;
				$three->id                 = $id;
				$three->name               = $name;
				$three->class              = $class;
				$three->group              = $group;
				$three->roll               = $roll;
				$three->section            = $section;
				$three->father_name        = $father_name;
				$three->father_profession  = $father_prof;
				$three->father_mobile      = $father_cell;
				$three->father_income      = $father_sal;
				$three->mother_name        = $mother_name;
				$three->mother_profession  = $mother_prof;
				$three->mother_mobile      = $mother_cell;
				$three->mother_income      = $mother_sal;
				$three->birth              = $birthdate;
				$three->religion           = $religion;
				$three->nationality        = $nationality;
				$three->austistic          = $aust;
				$three->village            = $village;
				$three->post_office        = $po;
				$three->post_code          = $pc;
				$three->distict            = $dist;
				$three->upazilla           = $upazilla;
				$three->previous_institute = $pi;
				$three->contact_no         = $cn;
				$three->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Four" ) {
				$four                     = new four();
				$four->timestamps         = false;
				$four->id                 = $id;
				$four->name               = $name;
				$four->class              = $class;
				$four->group              = $group;
				$four->roll               = $roll;
				$four->section            = $section;
				$four->father_name        = $father_name;
				$four->father_profession  = $father_prof;
				$four->father_mobile      = $father_cell;
				$four->father_income      = $father_sal;
				$four->mother_name        = $mother_name;
				$four->mother_profession  = $mother_prof;
				$four->mother_mobile      = $mother_cell;
				$four->mother_income      = $mother_sal;
				$four->birth              = $birthdate;
				$four->religion           = $religion;
				$four->nationality        = $nationality;
				$four->austistic          = $aust;
				$four->village            = $village;
				$four->post_office        = $po;
				$four->post_code          = $pc;
				$four->distict            = $dist;
				$four->upazilla           = $upazilla;
				$four->previous_institute = $pi;
				$four->contact_no         = $cn;
				$four->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Five" ) {
				$five                     = new five();
				$five->timestamps         = false;
				$five->id                 = $id;
				$five->name               = $name;
				$five->class              = $class;
				$five->group              = $group;
				$five->roll               = $roll;
				$five->section            = $section;
				$five->father_name        = $father_name;
				$five->father_profession  = $father_prof;
				$five->father_mobile      = $father_cell;
				$five->father_income      = $father_sal;
				$five->mother_name        = $mother_name;
				$five->mother_profession  = $mother_prof;
				$five->mother_mobile      = $mother_cell;
				$five->mother_income      = $mother_sal;
				$five->birth              = $birthdate;
				$five->religion           = $religion;
				$five->nationality        = $nationality;
				$five->austistic          = $aust;
				$five->village            = $village;
				$five->post_office        = $po;
				$five->post_code          = $pc;
				$five->distict            = $dist;
				$five->upazilla           = $upazilla;
				$five->previous_institute = $pi;
				$five->contact_no         = $cn;
				$five->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Six" ) {
				$six                     = new six();
				$six->timestamps         = false;
				$six->id                 = $id;
				$six->name               = $name;
				$six->class              = $class;
				$six->group              = $group;
				$six->roll               = $roll;
				$six->section            = $section;
				$six->father_name        = $father_name;
				$six->father_profession  = $father_prof;
				$six->father_mobile      = $father_cell;
				$six->father_income      = $father_sal;
				$six->mother_name        = $mother_name;
				$six->mother_profession  = $mother_prof;
				$six->mother_mobile      = $mother_cell;
				$six->mother_income      = $mother_sal;
				$six->birth              = $birthdate;
				$six->religion           = $religion;
				$six->nationality        = $nationality;
				$six->austistic          = $aust;
				$six->village            = $village;
				$six->post_office        = $po;
				$six->post_code          = $pc;
				$six->distict            = $dist;
				$six->upazilla           = $upazilla;
				$six->previous_institute = $pi;
				$six->contact_no         = $cn;
				$six->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Seven" ) {
				$seven                     = new seven();
				$seven->timestamps         = false;
				$seven->id                 = $id;
				$seven->name               = $name;
				$seven->class              = $class;
				$seven->group              = $group;
				$seven->roll               = $roll;
				$seven->section            = $section;
				$seven->father_name        = $father_name;
				$seven->father_profession  = $father_prof;
				$seven->father_mobile      = $father_cell;
				$seven->father_income      = $father_sal;
				$seven->mother_name        = $mother_name;
				$seven->mother_profession  = $mother_prof;
				$seven->mother_mobile      = $mother_cell;
				$seven->mother_income      = $mother_sal;
				$seven->birth              = $birthdate;
				$seven->religion           = $religion;
				$seven->nationality        = $nationality;
				$seven->austistic          = $aust;
				$seven->village            = $village;
				$seven->post_office        = $po;
				$seven->post_code          = $pc;
				$seven->distict            = $dist;
				$seven->upazilla           = $upazilla;
				$seven->previous_institute = $pi;
				$seven->contact_no         = $cn;
				$seven->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Eight" ) {
				$eight                     = new eight();
				$eight->timestamps         = false;
				$eight->id                 = $id;
				$eight->name               = $name;
				$eight->class              = $class;
				$eight->group              = $group;
				$eight->roll               = $roll;
				$eight->section            = $section;
				$eight->father_name        = $father_name;
				$eight->father_profession  = $father_prof;
				$eight->father_mobile      = $father_cell;
				$eight->father_income      = $father_sal;
				$eight->mother_name        = $mother_name;
				$eight->mother_profession  = $mother_prof;
				$eight->mother_mobile      = $mother_cell;
				$eight->mother_income      = $mother_sal;
				$eight->birth              = $birthdate;
				$eight->religion           = $religion;
				$eight->nationality        = $nationality;
				$eight->austistic          = $aust;
				$eight->village            = $village;
				$eight->post_office        = $po;
				$eight->post_code          = $pc;
				$eight->distict            = $dist;
				$eight->upazilla           = $upazilla;
				$eight->previous_institute = $pi;
				$eight->contact_no         = $cn;
				$eight->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Nine" ) {
				$nine                     = new nine();
				$nine->timestamps         = false;
				$nine->id                 = $id;
				$nine->name               = $name;
				$nine->class              = $class;
				$nine->group              = $group;
				$nine->roll               = $roll;
				$nine->section            = $section;
				$nine->father_name        = $father_name;
				$nine->father_profession  = $father_prof;
				$nine->father_mobile      = $father_cell;
				$nine->father_income      = $father_sal;
				$nine->mother_name        = $mother_name;
				$nine->mother_profession  = $mother_prof;
				$nine->mother_mobile      = $mother_cell;
				$nine->mother_income      = $mother_sal;
				$nine->birth              = $birthdate;
				$nine->religion           = $religion;
				$nine->nationality        = $nationality;
				$nine->austistic          = $aust;
				$nine->village            = $village;
				$nine->post_office        = $po;
				$nine->post_code          = $pc;
				$nine->distict            = $dist;
				$nine->upazilla           = $upazilla;
				$nine->previous_institute = $pi;
				$nine->contact_no         = $cn;
				$nine->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "K.G" ) {
				$kg                     = new kg();
				$kg->timestamps         = false;
				$kg->id                 = $id;
				$kg->name               = $name;
				$kg->class              = $class;
				$kg->group              = $group;
				$kg->roll               = $roll;
				$kg->section            = $section;
				$kg->father_name        = $father_name;
				$kg->father_profession  = $father_prof;
				$kg->father_mobile      = $father_cell;
				$kg->father_income      = $father_sal;
				$kg->mother_name        = $mother_name;
				$kg->mother_profession  = $mother_prof;
				$kg->mother_mobile      = $mother_cell;
				$kg->mother_income      = $mother_sal;
				$kg->birth              = $birthdate;
				$kg->religion           = $religion;
				$kg->nationality        = $nationality;
				$kg->austistic          = $aust;
				$kg->village            = $village;
				$kg->post_office        = $po;
				$kg->post_code          = $pc;
				$kg->distict            = $dist;
				$kg->upazilla           = $upazilla;
				$kg->previous_institute = $pi;
				$kg->contact_no         = $cn;
				$kg->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Play" ) {
				$play                     = new play();
				$play->timestamps         = false;
				$play->id                 = $id;
				$play->name               = $name;
				$play->class              = $class;
				$play->group              = $group;
				$play->roll               = $roll;
				$play->section            = $section;
				$play->father_name        = $father_name;
				$play->father_profession  = $father_prof;
				$play->father_mobile      = $father_cell;
				$play->father_income      = $father_sal;
				$play->mother_name        = $mother_name;
				$play->mother_profession  = $mother_prof;
				$play->mother_mobile      = $mother_cell;
				$play->mother_income      = $mother_sal;
				$play->birth              = $birthdate;
				$play->religion           = $religion;
				$play->nationality        = $nationality;
				$play->austistic          = $aust;
				$play->village            = $village;
				$play->post_office        = $po;
				$play->post_code          = $pc;
				$play->distict            = $dist;
				$play->upazilla           = $upazilla;
				$play->previous_institute = $pi;
				$play->contact_no         = $cn;
				$play->save();
				
				return redirect( '/admin' );
				
			} elseif ( $class == "Nursery" ) {
				$nur                     = new nursery();
				$nur->timestamps         = false;
				$nur->id                 = $id;
				$nur->name               = $name;
				$nur->class              = $class;
				$nur->group              = $group;
				$nur->roll               = $roll;
				$nur->section            = $section;
				$nur->father_name        = $father_name;
				$nur->father_profession  = $father_prof;
				$nur->father_mobile      = $father_cell;
				$nur->father_income      = $father_sal;
				$nur->mother_name        = $mother_name;
				$nur->mother_profession  = $mother_prof;
				$nur->mother_mobile      = $mother_cell;
				$nur->mother_income      = $mother_sal;
				$nur->birth              = $birthdate;
				$nur->religion           = $religion;
				$nur->nationality        = $nationality;
				$nur->austistic          = $aust;
				$nur->village            = $village;
				$nur->post_office        = $po;
				$nur->post_code          = $pc;
				$nur->distict            = $dist;
				$nur->upazilla           = $upazilla;
				$nur->previous_institute = $pi;
				$nur->contact_no         = $cn;
				$nur->save();
				
				return redirect( '/admin' );
				
			}
		}
		
		public function pdf() {
//        $pdf = PDF::loadView('pdf.admissionform');
//        return $pdf->download('pdf.admissionform');
			$pdf = App::make( 'dompdf.wrapper' );
			$pdf->loadHTML( '<h1>Test</h1>' );
			
			return $pdf->stream();
			
		}
	}
