<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
        .do{
            margin-top: 30px;
            letter-spacing: 2px;
            font-weight: bold;
            color: coral;
            text-decoration: underline;

        }
    </style>
</head>
    <body>
      <div class="container">
          <h4 class="text-center do" >Applicant Information</h4>
          <table class="table table-striped table-hover ">

              <thead>

              <tr class="table-primary">
                  <th >Admission Roll</th>
                  <th > Applicant Name</th>
                  <th >Requested Class</th>
                  <th >Requested Group</th>
                  <th >Contact Number</th>


              </tr>
              </thead>
              <tbody>
              @foreach ($de as $row)
                  <tr >
                      <th>{{$row->admission_roll}}</th>
                      <th>{{$row->name}}</th>
                      <th>{{$row->class}}</th>
                      <th>{{$row->group}}</th>
                      <th>{{$row->contact_no}}</th>


                  </tr>
              @endforeach
              </tbody>




              <thead>

              <tr class="table-primary">
                  <th >Date of Birth</th>
                  <th >Religion</th>
                  <th >Nationality</th>
                  <th >Previous Institute</th>
                  <th >Autistic</th>

              </tr>
              </thead>
              <tbody>
              @foreach ($de as $row)
                  <tr >
                      <th>{{$row->birth}}</th>
                      <th>{{$row->religion}}</th>
                      <th>{{$row->nationality}}</th>
                      <th>{{$row->previous_institute}}</th>
                      <th>{{$row->autistic}}</th>

                  </tr>
              @endforeach
              </tbody>
          </table>
          <h4 class="text-center do" >Father's Information</h4>
          <table class="table table-striped table-hover ">
              <thead>
                  <tr class="table-success">
                      <th>Father's Name</th>
                      <th>Father's Profession</th>
                      <th>Father's Cell Number</th>
                      <th>Father's Salary (Monthly)</th>

                  </tr>
              </thead>

              <tbody>
                  @foreach ($de as $row)
                      <tr>
                          <th>{{$row->father_name}}</th>
                          <th>{{$row->father_profession}}</th>
                          <th>{{$row->father_mobile}}</th>
                          <th>{{$row->father_income}}</th>

                      </tr>
                  @endforeach
              </tbody>
          </table>
          <h4 class="text-center do" >Mother's Information</h4>
          <table class="table table-striped table-hover ">
              <thead>

                  <tr class="table-success">
                      <th>Mother's Name</th>
                      <th>Mother's Profession</th>
                      <th>Mother's Cell Number</th>
                      <th>Mother's Salary (Monthly)</th>

                  </tr>
              </thead>
              <tbody>
                  @foreach ($de as $row)
                      <tr>
                          <th>{{$row->mother_name}}</th>
                          <th>{{$row->mother_profession}}</th>
                          <th>{{$row->mother_mobile}}</th>
                          <th>{{$row->mother_income}}</th>

                      </tr>
                  @endforeach
              </tbody>

          </table>
          <h4 class="text-center do" >Permanent Address</h4>
          <table class="table table-striped table-hover ">
              <thead>

              <tr class="table-danger">
                  <th>Village</th>
                  <th>PostOffice</th>
                  <th>PostCode</th>
                  <th>Distict<th>

              </tr>
              </thead>
              <tbody>
              @foreach ($de as $row)
                  <tr>
                      <th>{{$row->village}}</th>
                      <th>{{$row->post_office}}</th>
                      <th>{{$row->post_code}}</th>
                      <th>{{$row->distict}}</th>

                  </tr>
              @endforeach
              </tbody>

          </table>



      </div>
    </body>
</html>

    {{--01993785696     --}}
 {{--8.19-10.53 17ta sms--}}
{{--01971430825--}}
