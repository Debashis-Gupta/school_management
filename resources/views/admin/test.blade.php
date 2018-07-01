<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">See Request</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Welcome To Admin Panel</h3>
      <p>Develop For Testing</p>

    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="table-responsive" style="margin-top:30px">
    <table class="table table-striped table-hover table-condensed">
      <thead>

        <tr>
          <th><strong>Applicant Roll</strong></th>
          <th><strong>Applicant Name</strong></th>

          <th><strong>Requested Class</strong></th>
          <th><strong>Requested Group</strong></th>
          <th><strong>View Details</strong></th>
          <th><strong>Action</strong></th>
        </tr>
      </thead>
      <tbody>

     @foreach ($classes as $row)
       <th>{{$row->admission_roll}}</th>
          <th>{{$row->name}}</th>

         <th>{{$row->class}}</th>
          <th>{{$row->group}}</th>
          <th>
            {{--<button type="button" name="button" class="btn btn-primary">Click</button>--}}
          <a href="{{URL :: to('/admin',$row->id)}}"><button type="button" name="button" class="btn btn-primary">Click</button></a>
          </th>
          <th>
          <a href="{{URL :: to('/admin/approve',$row->id)}}" ><button type="button" name="button" class="btn btn-primary">Approve</button></a>
            <button type="button" name="button" class="btn btn-danger">Delete</button>

          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
  <!-- pills er extended div -->
</div>
<!-- //container class er div -->

</body>
</html>
