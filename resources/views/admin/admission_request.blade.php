

@extends('layout.footeradmin')

@extends('layout.headeradmin')


@section('content')
<section class="content-header">
    <!-- /.col -->




  <div class="table-responsive" style="margin-top:30px">
<table class="table table-striped table-hover table-condensed">
  <thead>

    <tr>
        <th><strong>Image</strong></th>
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
     <tr>
	 <?php
	 $imagename=storage_path().'/image/'.$row->image;
	// dd($imagename);
	 ?>
     <td>
         {{--/<img src="{{$imagename}}" alt="">--}}
         <img src="{{'../storage/image/'.$row->image}}" alt="" class="img-circle" style="width: 91px;">
         {{--<img src="{{$imagename}}" alt="" class="rounded">--}}
     </td>
   <td>{{$row->admission_roll}}</td>
      <td>{{$row->name}}</td>

     <td>{{$row->class}}</td>
      <td>{{$row->group}}</td>
      <td>
        {{--<button type="button" name="button" class="btn btn-primary">Click</button>--}}
      <a href="{{URL :: to('/admin',$row->id)}}"><button type="button" name="button" class="btn btn-primary">Click</button></a>
      </td>
      <td>
      <a href="{{URL :: to('/admin/approve',$row->id)}}" ><button type="button" name="button" class="btn btn-primary">Approve</button></a>
        <button type="button" name="button" class="btn btn-danger">Delete</button>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
  <!-- /.row -->
</section>

@endsection
