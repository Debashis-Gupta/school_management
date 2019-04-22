<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Fillup</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
      <h2> Form Validation</h2>
      <form action="{{asset('formfil')}}" autocomplete="on" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="academic">Academic Year:</label>
              <input type="text" id="academic" name="academic" class="form-control" placeholder="Enter Academic Year" value="{{old('firstname')}}">

            </div>
          </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="section">Section</label>
                <input type="text" id="section" class="form-control" name="section" value="{{old('lastname')}}" placeholder="Enter section">


              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" value="{{old('email')}}" placeholder="Enter Your Name" id="email" class="form-control">

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group ">
              <label for="father">Father's Name</label>
              <input type="text" name="father" value="{{old('mobileno')}}" id='father' class="form-control" placeholder="Enter Father's Name">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="roll">Roll:</label>
              <input type="text" name="roll" value="{{old('password')}}" placeholder="Enter Roll no." id="password" class="form-control">

          </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mother">Mother's Name:</label>
              <input type="text" name="mother" value="" id="confirm_password"class="form-control"placeholder="Enter Mother's Name">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="text" name="gender" value="{{old('password')}}" placeholder="Enter Gender." id="password" class="form-control">

          </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobileno">Guardin Number:</label>
              <input type="text" name="mobileno" value="" id="mobileno"class="form-control"placeholder="Enter Mobile Number">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="religion">Religion:</label>
              <input type="text" name="religion"  placeholder="Enter Roll no." id="religion" class="form-control">

          </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" name="address"  id="address"class="form-control"placeholder="Enter Address">

            </div>
          </div>
        </div>

           <div class="form-group">
             <h2>Teacher</h2>
             <div class="col-md-6">
               <div class="form-group ">
                 <label for="father">Teacher's's Name</label>
                 <input type="text" name="teacher" value="{{old('mobileno')}}" id='father' class="form-control" placeholder="Enter Father's Name">

               </div>
             </div>

            <button class="btn btn-success pull-right">Submit</button>

          </div>
      </form>
    </div>
  </body>
</html>
