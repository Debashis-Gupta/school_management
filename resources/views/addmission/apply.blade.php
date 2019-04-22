@extends('layout.header')
@section('content')
@endsection
<section id="inner_about" class="inner_bg_white">
    <div class="inner_section clearfix">
        <h2 class="text-center" style="margin-bottom:32px;">Addmission_Apply</h2>
        <div>
            <form method="POST" action="{{asset('form')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label font_size">Applicant Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="applicant_name" class="form-control" id="inputEmail3"
                               placeholder="Must be in block letter" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-6">
                        <label for="disabledSelect">Class</label>
                        <select id="disabledSelect" class="form-control" name="class">
                            <option>Choose</option>
                            @foreach ($classes as $class)
                                <option>{{ $class}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledSelect">Group</label>
                        <select id="disabledSelect" class="form-control" name="group">
                            <option>Choose</option>
                            @foreach($groups as $group)
                                <option>{{ $group }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-6">
                        <label for="">Father's Name</label>
                        <input type="text" class="form-control" name="father_name" id=""
                               placeholder="Must be in block letter" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Mother's Name</label>
                        <input name="mother_name" type="text" class="form-control" id=""
                               placeholder="Must be in block letter" required>
                    </div>

                </div>
                <div class="form-group row">
                    <div class="form-group col-md-6">
                        <label for="">Father's Profession</label>
                        <input type="text" name="father_prof" class="form-control" id=""
                               placeholder="Must be in block letter" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Mother's Profession</label>
                        <input type="text" name="mother_prof" class="form-control" id=""
                               placeholder="Must be in block letter" required>
                    </div>

                </div>
                <div class="form-group row">
                    <div class="form-group col-md-6">
                        <label for="">Father's CellNumber</label>
                        <input type="" name="father_cell" class="form-control" id="" placeholder="+8801xxxxxxxxx"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Mother's CellNumber</label>
                        <input type="" name="mother_cell" class="form-control" id="" placeholder="+8801xxxxxxxxx"
                               required>
                    </div>

                </div>
                <div class="form-group row">
                    <div class="form-group col-md-6">
                        <label for="">Father's Salary</label>
                        <input type="text" name="father_sal" class="form-control" id="" placeholder="Monthly Income"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Mother's Salary</label>
                        <input type="text" name="mother_sal" class="form-control" id="" placeholder="Monthly Income">
                    </div>

                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="">Date of Birth</label>
                        <input type="date" name="birthdate" class="form-control" id="" placeholder="" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Religion</label>
                        <input type="" name="religion" class="form-control" id="" placeholder="Enter" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nationality</label>
                        <input type="" name="nationality" class="form-control" id="" placeholder="Bangladeshi" required>
                    </div>

                </div>
                <h4>Permanent Address</h4>
                <div class="form-group row">

                    <div class="form-group col-md-4">
                        <label for="inputCity">Village</label>
                        <input type="text" name="village" class="form-control" id="inputCity"
                               placeholder="Enter village name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Post Office</label>
                        <input type="text" name="po" class="form-control" id="inputZip"
                               placeholder="Enter post office name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Post Code</label>
                        <input type="text" name="pc" class="form-control" id="inputZip"
                               placeholder="Enter post code number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Upazilla</label>
                        <input type="text" name="upalzilla" class="form-control" id="inputCity"
                               placeholder="Enter Upazilla name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">District</label>
                        <input type="text" name="dist" class="form-control" id="inputCity"
                               placeholder="Enter District name" required>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="inputCity">The name of previous institute</label>
                        <input type="text" name="pi" class="form-control" id="inputCity" placeholder="If applicant has">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputCity">Contact Number</label>
                        <input type="text" name="cn" class="form-control" id="inputCity" placeholder="+8801xxxxxxxxx"
                               required>
                    </div>
                    <label for="">Autistic</label>
                    <div class="form-check col-md-3">
                        <div class="form-group">
                            <select class="form-control" id="sel1" name="aust">
                                <option>Yes</option>
                                <option>No</option>

                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleFormControlFile1">Applicant Pastport-size Picture</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button class="btn btn-primary pull-left" type="submit">Submit form</button>
            </form>


</section>

@extends('layout.footer')
@section('content')
@endsection
