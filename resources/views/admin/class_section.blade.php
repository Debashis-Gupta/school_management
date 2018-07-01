@extends('layout.footeradmin')

@extends('layout.headeradmin')


@section('content')
    <div class="container">

        <div class="form-group row" style="margin-top: 30px;">
            <div class="col-md-4">
                <label for="inputEmail3" class="col-form-label " style="font-size: large;">Class:</label>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addclass">Add</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteclass">Delete</button>
            </div>
            <div class="col-md-4">
                <label for="inputEmail3" class="col-form-label " style="font-size: large;">Section:</label>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addsection">Add</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletesection">Delete</button>
            </div>
            <div class="col-md-4">
                <label for="inputEmail3" class="col-form-label " style="font-size: large;">Join Class & Section:</label>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_class_section">Add</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#pressme">Delete</button>
            </div>
        </div>



        <div class="modal fade " id="addclass" style="left: 230px;">
            <div class="modal-dialoge modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h2><b>Add Class You Want</b></h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-content">
                        <form action="{{asset('/admin/addclass')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="class" placeholder="Enter Your Class"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary pull-right" type="submit">Confirm</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade " id="deleteclass" style="left: 230px;">
            <div class="modal-dialoge modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h2><b>Delete Class You Want</b></h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-content">
                        <form action="{{asset('deleteclass')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Class</label>
                                </div>
                                <div class="col-md-8">
                                    <select id="disabledSelect" class="form-control" name="cls">
                                        <option>Choose</option>
                                        @foreach ($classes as $class)
                                            <option>{{ $class->class}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary pull-right" type="submit">Confirm</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade " id="add_class_section" style="left: 230px;">
            <div class="modal-dialoge modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h2><b>Join Class & Section</b></h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-content">
                        <form action="{{asset('/add_cls_sec')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Class</label>
                                </div>
                                <div class="col-md-8">
                                    <select id="disabledSelect" class="form-control" name="cls">
                                        <option>Choose</option>
                                        @foreach ($classes as $class)
                                            <option>{{$class->class}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Section</label>
                                </div>
                                <div class="col-md-8">
                                    <select id="disabledSelect" class="form-control" name="sec">
                                        <option>Choose</option>
                                        @foreach ($sections as $section)
                                            <option>{{ $section->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary pull-right" type="submit">Confirm</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade " id="addsection" style="left: 230px;">
            <div class="modal-dialoge modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h2><b>Add Section You Want</b></h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-content">
                        <form action="{{asset('addsection')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="section" placeholder="Enter Your Section"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary pull-right" type="submit">Confirm</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade " id="deletesection" style="left: 230px;">
            <div class="modal-dialoge modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h2><b>Delete Section You Want</b></h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-content">
                        <form action="{{asset('addsection')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Section</label>
                                </div>
                                <div class="col-md-8">
                                    <select id="disabledSelect" class="form-control" name="sec">
                                        <option>Choose</option>
                                        @foreach ($sections as $section)
                                            <option>{{ $section->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <div class="container">


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Class</th>
                <th>Section</th>

            </tr>
            </thead>
            @foreach($class_section as $row)
            <tbody>
            <tr>
                <td>{{$row->class_name}}</td>
                <td>{{$row->section_name}}</td>

            </tr>

            </tbody>
            @endforeach
        </table>
    </div>

@endsection
