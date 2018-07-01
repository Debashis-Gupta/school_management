@extends('layout.footeradmin')
@extends('layout.headeradmin')
@section('content')

<div class="container">
  <section id="inner_about" class="inner_bg_white">
      <div class="inner_section clearfix">
          <h2 class="text-center" style="margin-bottom:32px;">Addmission_Apply</h2>
         <form method="POST" action="{{asset('/admin/final')}}">
             {{ csrf_field() }}
             @foreach($two as $two)
                 <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label font_size">Applicant Name :</label>
                     <div class="col-sm-3">
                         <input type="text" name="applicant_name" class="form-control" id="inputEmail3" value="{{$two->name}}">
                     </div>
                     <label for="inputEmail3" class="col-sm-2 col-form-label font_size">Applicant ID :</label>
                     <div class="col-sm-3">
                         <input type="text" name="applicant_id" class="form-control" id="inputEmail3" placeholder="Enter Id Number" required >
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="form-group col-md-5">
                         <label for="disabledSelect">Roll</label>
                         <input type="text" name="roll" class="form-control" id="inputEmail3" placeholder="Enter the roll" required>

                     </div>
                     <div class="form-group col-md-5">
                         <label for="disabledSelect">Section</label>
                        <select  class="form-control" name="section" required>
                            <option>Please Select</option>
                            @foreach($sec as $sec)
                            <option>{{$sec->name}}</option>
                                @endforeach
                        </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="form-group col-md-5">
                         <label for="disabledSelect">Class</label>
                         <input type="text" name="class" class="form-control" id="inputEmail3" value="{{$two->class}}">

                     </div>
                     <div class="form-group col-md-5">
                         <label for="disabledSelect">Group</label>
                         <input type="text" name="group" class="form-control" id="inputEmail3" value="{{$two->group}}">
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="form-group col-md-5">
                         <label for="">Father's Name</label>
                         <input type="text" class="form-control" name="father_name"id="" value="{{$two->father_name}}">
                     </div>
                     <div class="form-group col-md-5">
                         <label for="">Mother's Name</label>
                         <input name="mother_name" type="text" class="form-control" id="" value="{{$two->mother_name}}">
                     </div>

                 </div>
                 <div class="form-group row">
                     <div class="form-group col-md-5">
                         <label for="">Father's Profession</label>
                         <input type="text" name="father_prof"class="form-control" id="" value="{{$two->father_profession}}">
                     </div>
                     <div class="form-group col-md-5">
                         <label for="">Mother's Profession</label>
                         <input type="text" name="mother_prof" class="form-control" id=""value="{{$two->mother_profession}}">
                     </div>

                 </div>
                 <div class="form-group row">
                     <div class="form-group col-md-5">
                         <label for="">Father's CellNumber</label>
                         <input type="" name="father_cell" class="form-control" id="" value="{{$two->father_mobile}}">
                     </div>
                     <div class="form-group col-md-5">
                         <label for="">Mother's CellNumber</label>
                         <input type="" name="mother_cell"class="form-control" id="" value="{{$two->mother_mobile}}">
                     </div>

                 </div>
                 <div class="form-group row">
                     <div class="form-group col-md-5">
                         <label for="">Father's Salary</label>
                         <input type="text"  name="father_sal" class="form-control" id="" value="{{$two->father_income}}">
                     </div>
                     <div class="form-group col-md-5">
                         <label for="">Mother's Salary</label>
                         <input type="text" name="mother_sal" class="form-control" id="" value="{{$two->mother_income}}">
                     </div>

                 </div>
                 <div class="form-group row">
                     <div class="form-group col-md-3">
                         <label for="">Date of Birth</label>
                         <input type="date" name="birthdate" class="form-control" id="" value="{{$two->birth}}">
                     </div>
                     <div class="form-group col-md-3">
                         <label for="">Religion</label>
                         <input type="" name="religion" class="form-control" id="" value="{{$two->religion}}">
                     </div>
                     <div class="form-group col-md-4">
                         <label for="">Nationality</label>
                         <input type="" name="nationality" class="form-control" id="" value="{{$two->nationality}}">
                     </div>

                 </div>
                 <h4>Permanent Address</h4>
                 <div class="form-group row">

                     <div class="form-group col-md-3">
                         <label for="inputCity">Village</label>
                         <input type="text" name="village" class="form-control" id="inputCity" value="{{$two->village}}">
                     </div>
                     <div class="form-group col-md-3">
                         <label for="inputState">Post Office</label>
                         <input type="text" name="po" class="form-control" id="inputZip" value="{{$two->post_office}}">
                     </div>
                     <div class="form-group col-md-3">
                         <label for="inputZip">Post Code</label>

                         <input type="text" name="pc" class="form-control" id="inputZip" value="{{$two->post_code}}">
                     </div>
                   </div>
                   <div class="form-group row">
                     <div class="form-group col-md-5">
                         <label for="inputCity">Upazilla</label>
                         <input type="text" name="upalzilla" class="form-control" id="inputCity" value="{{$two->upazilla}}">
                     </div>
                     <div class="form-group col-md-5">
                         <label for="inputCity">District</label>
                         <input type="text" name="dist" class="form-control" id="inputCity" value="{{$two->distict}}">
                     </div>
                   </div>
                   <div class="form-group row">
                     <div class="form-group col-md-5">
                         <label for="inputCity">The name of previous institute</label>
                         <input type="text" name="pi" class="form-control" id="inputCity" value="{{$two->previous_institute}}">
                     </div>

                     <div class="form-group col-md-4">
                         <label for="inputCity">Contact Number</label>
                         <input type="text" name="cn" class="form-control" id="inputCity" value="<?php echo '0'?>{{$two->contact_no}}">
                     </div>
                     <label style="margin-left:18px;" for="">Autistic</label>
                     <div class="form-check col-md-3">
                         <div class="form-group">
                             <input style="width:100px;" type="text" name="aust" class="form-control" id="inputCity" value="{{$two->autistic}}">

                         </div>
                     </div>
                 </div>
             @endforeach
                 <button style="margin-bottom:20px;" class="btn btn-primary pull-left" type="submit">Approve The Applicant</button>
         </form>
      </div>


  </section>

</div>
@endsection
