

@extends('layout.footeradmin')

@extends('layout.headeradmin')


@section('content')
<section class="content-header">
    <!-- /.col -->
    <h2>hwllo petnei</h2>

  <p>here is the application request</p>

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
  <!-- /.row -->
</section>

@endsection
