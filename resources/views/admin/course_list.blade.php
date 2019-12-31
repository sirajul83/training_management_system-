@extends('admin.master');
@section("title")
Add Course
@endsection
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section> --}}

    <!-- Main content -->
    <section class="content">
   <form action="{{url('course-register')}}" method="post">
		  	@csrf	
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Course List</h3>
         
        </div>
          <div class="row" style="padding-left: 10px">
            
            <div class="col-md-8">
              <table  class="table table-bordered">
               <thead>
                  <tr>
                    <td>Name  </td>
                    <td>Course ID : </td>
                    <td>Fee  </td>
                    <td>Action</td>
                </tr>
               </thead>
                @foreach($course_info as $data)
                <tbody>
                  <tr>
                    <td> {{$data->name}}</td>
                    <td> {{$data->course_id}}</td>
                    <td> {{$data->fee}}</td>
                    <td> <a href="{{ url('edit-course')}}/{{$data->id}}" class="btn btn-success">Edit</a>  <a href="{{ url('delete-course')}}/{{$data->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
  </div>
</div>
    </section>
    <!-- /.content -->
  </div> 
  @if(Session::has('success'))
<script>
	swal("Good job!", "Registeration Successfully", "success");
</script>
@endif
 @endsection

