@extends('admin.master');
@section("title")
Batch list
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
          <h3 class="box-title">Batch List</h3>
         
        </div>
          <div class="row" style="padding-left: 10px">
            
            <div class="col-md-8">
              <table  class="table table-bordered">
               <thead>
                  <tr>
                    <td>Id  </td>
                    <td>Name  </td>
                    <td>Batch ID : </td>
                    <td>Teacher Name  </td>
                    <td>Start date  </td>
                    <td>Action</td>
                </tr>
               </thead>
                <?php $i=1;?>
                @foreach($batch_info as $data)
                <tbody>
                  <tr>
                    <td> {{$i++}}</td>
                    <td> {{$data->name}}</td>
                    <td> {{$data->batch_id}}</td>
                    <td> {{$data->teacher_name}}</td>
                    <td> {{$data->start_date}}</td>
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
	swal("Good job!", "Batch Added Successfully", "success");
</script>
@endif
 @endsection

