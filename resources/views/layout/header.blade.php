
<!DOCTYPE html>
<html>
  <head>




<!-- <meta http-equiv="content-type" content="text/html;charset=utf-8" /><head> -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bir Muktijodha Mostafizur Rahman Institute</title>
<meta name="description" content="BMMRI is a Senior Secondary School, Owned and Managed by Bangladesh Education Ministry. Established in 2017." />
<meta name="keywords" content="bangladeshi, school,BMMRI primary school, education, Bir Muktijoddha, Bangladesh, syllabus, curriculum" />



	<link rel="shortcut icon" type="image/x-icon" href="images/sis.ico" />
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/navbar-fixed-top.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css')}}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>
<style type="text/css">
  .slider {
      width: 900px;
      margin: 0px auto;
  }

  .slick-slide {
    margin: 0px 20px;
  }

  .slick-slide img {
    width: 100%;
  }

  .slick-prev:before,
  .slick-next:before {
      color: black;
  }
	@media (min-width: 1300px){
	/*Bino New styles*/
		#wowslider-container1 img{width:100%;}
	}

</style>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".gotop a,.navbar-nav > li > a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
$(document).ready(function(){
    $(".sis .navbar-default .navbar-nav > li > a").click(function(){
        $(".sis .navbar-default .navbar-nav > li > a").removeClass("clkd");
        $(this).addClass("clkd");
    });

});
</script>




</head>

<body id="topSection">
	<div class="gotop"><a href="#topSection"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
    <div class="sis">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			  <!--<a class="navbar-brand" href="/"><img src="/images/sharjah_indian_school.png"></a>-->

			  <a class="navbar-brand logoSec" href="{{asset('/')}}">
			  	<div class="schoolLogo"><img src="{{ asset('img/logo.jpg') }}"/></div>
<div class="rightCnt"><span class="schoolName">BMMRI</span> <span class="schoolTitle"><strong>Come to be a Future Leader</strong></span></div>
			  </a>


          </div>
          <div class="header_info flexBox">
<div class="header_info_items"><span class="fa fa-phone-square"> </span> +8801701284400</div>
<div class="header_info_items"><span class="fa fa-envelope"> </span> bmmri.edu.bd@gmail.com</div>
<div class="header_info_items"><span class="fa fa-map-marker"> </span> P.O.Box 5260, Phulbari, Dinajpur</div>
<div class="header_info_items" style="cursor: pointer; display: none;"><span class="fa fa-sign-in"> </span>sign in</div>
</div>
<div class="header_social_box"><a href="admission/admission-result.html" class="login_btn">Sign Up</a><a href="http://orisonschool.com/sis/Login.aspx" class="login_btn">LOGIN</a></div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav  navbar-right">
<li><a href="{{asset('/')}}" title="School Home">Home</a></li>
<li class="dropdown"><a href="{{ asset('/about') }}" class="dropdown-toggle dropArrow">About Us </a>
<ul class="dropdown-menu">
<li><a href="{{ asset('about/introduction') }}" title="About Us">Introduction</a></li>

<li><a href="{{asset('about/cbse_proforma') }}" title="CBSE PROFORMA">CBSE Proforma</a></li>
<li><a href="{{asset('about/minister_message')}}" title="Principal's Message">Message</a></li>
<li><a href="{{asset('about/infrastructure')}}" title="Infrastructure">Infrastructure</a></li>
</ul>
</li>
<li class="dropdown"><a href="{{asset('/academic')}}" class="dropdown-toggle dropArrow">Academic </a>
<ul class="dropdown-menu">
<li><a href="{{asset('academic/curriculumn')}}" title="Curriculam">Curriculum</a></li>
<li><a href="{{asset('academic/class_timetables')}}" title="Class TimeTable">Class Timetables</a></li>
<li><a href="{{asset('/academic/calender')}}" title="School Calendar">School Calendar</a></li>
<li><a href="{{asset('/academic/syllabus')}}" title="Syllabus">Syllabus</a></li>
<li><a href="{{asset('/co_curriculumn')}}" title="Co Curricular">Co-Curricular</a></li>

</ul>
</li>
<li class="dropdown"><a href="admission/admission-result.html" title="Admission" class="dropArrow">Admission</a>
<ul class="dropdown-menu">
  <li><a href="{{asset('addmission/apply')}}" title="Apply">Apply</a></li>
<li><a href="{{asset('addmission/addmission_result')}}" title="admission_result">Admission Result</a></li>
<!-- <li><a href="admission/online-registration.html" title="Admission">Online Registration</a></li> -->
<li><a href="{{asset('addmission/addmission_notice')}}" title="Notice">Noitce</a></li>
</ul>
</li>
<li class="dropdown"><a href="{{asset('/student_corner/result')}}" title="Admission" class="dropArrow">Student Corner</a>
<ul class="dropdown-menu">
<li><a href="{{asset('/student_corner/result')}}" title="Result">Result</a></li>
<li><a href="{{asset('/student_corner/profile')}}" title="Profile">Profile</a></li>
<li><a href="{{asset('/student_corner/uniform')}}" title="Uniform">Uniform</a></li>
<li><a href="{{asset('/student_corner/transportation')}}" title="Transportation">Transportation</a></li>
<li><a href="{{asset('/student_corner/fees')}}" title="Fees">Fees</a></li>
</ul>
</li>

<li class="dropdown"><a href="#" title="Gallery" class="dropArrow">Gallery</a>
<ul class="dropdown-menu">
<li><a href="gallery/photos-gallery.html" title="Photos Gallery">Photo Gallery</a></li>

</ul>
</li>
<li class="dropdown"><a href="{{asset('/teacher_corner/teacher_information')}}" title="Teacher Corner" class="dropArrow">Teacher Corner</a>
<ul class="dropdown-menu">
<li><a href="{{asset('/teacher_corner/teacher_information')}}" title="Bio">Teacher Information</a></li>
<li><a href="{{asset('/teacher_corner/teacher_notice')}}" title="Notice">Teacher Notice</a></li>
<li><a href="{{asset('/teacher_corner/assistment_class')}}" title="Class-teacher">Assistment of Class</a></li>
</ul>
</li>
<li class="dropdown"><a href="#" title="Careers" class="dropArrow">Guardian</a>
<ul class="dropdown-menu">
<li><a href="careers/vacancy.htm" title="Recuritment">Student's result</a></li>
<li><a href="careers/vacancy.html" title="Recuritment">Teacher's comment</a></li>
</ul>
</li>
<li class="dropdown"><a href="{{asset('/vacancy/teacher_recuritment')}}" title="Careers" class="dropArrow">Careers</a>
<ul class="dropdown-menu">
<li><a href="{{asset('/vacancy/teacher_recuritment')}}" title="Recuritment">Teacher</a></li>
<li><a href="{{asset('/vacancy/employee_recuritment')}}" title="Recuritment">Employee</a></li>
</ul>
</li>
<li><a href="{{asset('/contact')}}" title="Contact Us">Contact</a></li>
<li class="hide-on-desktop"><a href="#" title="Login">Login</a></li>
</ul>

          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </div>
		@yield('content')
