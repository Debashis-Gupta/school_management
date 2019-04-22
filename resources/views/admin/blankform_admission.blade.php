<html>
<head>
    <title>Admission Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>





        .passport {
            background-color: beige;

            height: 190px;

        }

        .head_color {
            margin: -16px;
            margin-top: -20px;
            background: firebrick;
            text-align: center;
            color: whitesmoke;
        }

        .head_color h3 {
            padding: 10px;
        }

        .mar {
            border-top: 2px solid;
            width: 195px;
            margin-top: 26px;
            margin-left: 59px;
        }

        .mar2 {
            border-top: 2px solid;
            width: 195px;
            margin-top: 26px;

        }

        .sign {
            margin-left: 95px;
            font-size: 15px;
            font-weight: bold;
        }

        .sign2 {
            margin-left: 13px;
            font-size: 15px;
            font-weight: bold;
        }

    </style>

</head>
<body class="container-fluid" style="border: 2px solid red" ;>


<header>
    <div class="row">
                <div class="col-xs-12" style="background-color:lightyellow">
            <div class="text-center" style="padding: 33px">
                <h2>Bir MuktiJoddha Mostafizur Rahman Institute</h2>

                <h4>Upazila Road, Phulbari, Dinajpur</h4>

                <p><strong>Est.:</strong>2017, <strong>EIIN:</strong> 138327 </p>
            </div>


        </div>
        {{--End of he--}}
    </div>
    {{--end of header row--}}
    <div class="head_color">
        <h3>Admission Form</h3>
    </div>
</header>
<section id="inner_about" class="inner_bg_white">
    <div class="inner_section clearfix">
        <h2 class="text-center" style="margin-bottom:32px;"></h2>
        <div>
            <form method="POST" action="{{asset('form')}}">
                {{csrf_field()}}
                <div class="form-group row" style="margin-left: 15px;">
                    <label for="inputEmail3" class="col-xs-2 col-form-label font_size">Applicant Name :</label>
                    <div class="col-xs-8">
                        <input type="text" name="applicant_name" class="form-control" id="inputEmail3"
                               placeholder="Must be in block letter" required>
                    </div>
                </div>
                <div class="form-group row" style="margin-left: 15px;">
                    <div class="form-group col-xs-5">
                        <label for="disabledSelect">Class</label>
                        <input type="text" name="applicant_name" class="form-control" id="inputEmail3"
                               placeholder="Applied Class" required>

                    </div>
                    <div class="form-group col-xs-5">
                        <label for="disabledSelect">Group</label>
                        <input type="text" name="applicant_name" class="form-control" id="inputEmail3"
                               placeholder="Science / Arts / N~A" required>
                    </div>
                </div>
                <div class="form-group row" style="margin-left: 15px;">
                    <div class="form-group col-xs-5">
                        <label for="">Father's Name</label>
                        <input type="text" class="form-control" name="father_name" id=""
                               placeholder="Must be in block letter" required>
                    </div>
                    <div class="form-group col-xs-5">
                        <label for="">Mother's Name</label>
                        <input name="mother_name" type="text" class="form-control" id=""
                               placeholder="Must be in block letter" required>
                    </div>

                </div>
                <div class="form-group row " style="margin-left: 15px;">
                    <div class="form-group col-xs-5">
                        <label for="">Father's Profession</label>
                        <input type="text" name="father_prof" class="form-control" id=""
                               placeholder="Must be in block letter" required>
                    </div>
                    <div class="form-group col-xs-5">
                        <label for="">Mother's Profession</label>
                        <input type="text" name="mother_prof" class="form-control" id=""
                               placeholder="Must be in block letter" required>
                    </div>

                </div>
                <div class="form-group row" style="margin-left: 15px;">
                    <div class="form-group col-xs-5">
                        <label for="">Father's CellNumber</label>
                        <input type="" name="father_cell" class="form-control" id="" placeholder="+8801xxxxxxxxx"
                               required>
                    </div>
                    <div class="form-group col-xs-5">
                        <label for="">Mother's CellNumber</label>
                        <input type="" name="mother_cell" class="form-control" id="" placeholder="+8801xxxxxxxxx"
                               required>
                    </div>

                </div>
                <div class="form-group row" style="margin-left: 15px;">
                    <div class="form-group col-xs-5">
                        <label for="">Father's Salary</label>
                        <input type="text" name="father_sal" class="form-control" id="" placeholder="Monthly Income"
                               required>
                    </div>
                    <div class="form-group col-xs-5">
                        <label for="">Mother's Salary</label>
                        <input type="text" name="mother_sal" class="form-control" id="" placeholder="Monthly Income">
                    </div>

                </div>
                <div class="form-group row" style="margin-left: 15px;">
                    <div class="form-group col-xs-4">
                        <label for="">Date of Birth</label>
                        <input type="date" name="birthdate" class="form-control" id="" placeholder="" required>
                    </div>
                    <div class="form-group col-xs-3">
                        <label for="">Religion</label>
                        <input type="" name="religion" class="form-control" id="" placeholder="Enter" required>
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="">Nationality</label>
                        <input type="" name="nationality" class="form-control" id="" placeholder="Bangladeshi" required>
                    </div>

                </div>
                <h4 style="margin-left: 15px;">Permanent Address</h4>
                <div class="form-group row" style="margin-left: 15px;">

                    <div class="form-group col-xs-4">
                        <label for="inputCity">Village</label>
                        <input type="text" name="village" class="form-control" id="inputCity"
                               placeholder="Enter village name" required>
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="inputState">Post Office</label>
                        <input type="text" name="po" class="form-control" id="inputZip"
                               placeholder="Enter post office name" required>
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="inputZip">Post Code</label>
                        <input type="text" name="pc" class="form-control" id="inputZip"
                               placeholder="Enter post code number">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="inputCity">Upazilla</label>
                        <input type="text" name="upalzilla" class="form-control" id="inputCity"
                               placeholder="Enter Upazilla name" required>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="inputCity">District</label>
                        <input type="text" name="dist" class="form-control" id="inputCity"
                               placeholder="Enter District name" required>
                    </div>

                    <div class="form-group col-xs-5">
                        <label for="inputCity">The name of previous institute</label>
                        <input type="text" name="pi" class="form-control" id="inputCity" placeholder="If applicant has">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="inputCity">Contact Number</label>
                        <input type="text" name="cn" class="form-control" id="inputCity" placeholder="+8801xxxxxxxxx"
                               required>
                    </div>
                    <label for="">Autistic</label>
                    <div class="form-check col-xs-3">
                        <div class="form-group">
                            <input type="text" name="applicant_name" class="form-control" id="inputEmail3"
                                   placeholder="Yes / No" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-6 ">
                        <p class="mar"></p>
                        <p class="sign">Applicant Sign</p>

                    </div>
                    <div class="col-xs-6">
                        <p class="mar2"></p>
                        <p class="sign2">Applicant's Parent Sign</p>

                    </div>


                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <strong>Note : </strong>
                        <span style="font-weight: bold;">
                                        By signing on the form I,the applicant accept the given information
                                        belongs to me and if there is any fault then the authority's any kind
                                        of decision will be reconcilement .
                                    </span>
                    </div>
                </div>

            </form>

        </div>
    </div>
</section>


{{--end of full section--}}


</body>
{{--End of container--}}
</html>
