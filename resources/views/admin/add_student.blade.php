@extends('admin.master');
@section("title")
Add Student 
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
   <form action="{{url('student-register')}}" method="post">
		  	@csrf	
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">

        <div class="box-header with-border">
          <h3 class="box-title">Student Add</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Student Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Student Name" >
                @error('name')
                <span style="color: red;" class="invalid-feedback" role="alert"> {{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label>Mother Name</label>
                <input class="form-control" type="text" name="mothername" placeholder="Mother Name" >
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Batch ID </label>

                 <select name="batch_id" class="form-control select2 @error('batch_id') is-invalid @enderror" style="width: 100%;">
                  <option value=""> Select </option>
                  @foreach($data['batch_data'] as $item)
                  <option value="{{ $item->id}}">{{$item->name}} </option>
                  @endforeach
                  
                </select>
                 @error('batch_id')
                <span style="color: red;" class="invalid-feedback" role="alert"> {{ $message }}</span>
                @enderror
              </div>
               <div class="form-group">
                <label>Religion </label>
                <select name="religion" class="form-control select2 @error('religion') is-invalid @enderror" style="width: 100%;">
                  <option value=""> Select </option>
                  <option value="1">Islam </option>
                  <option value="2">Hindu </option>
                  <option value="3">Crstan</option>
                  
                </select>
                 @error('religion')
                <span style="color: red;" class="invalid-feedback" role="alert"> {{ $message }}</span>
                @enderror
              </div>
               <div class="form-group">
                <label>Address </label>
                 
                 <textarea class="form-control" name="address" ></textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
               <div class="form-group">
                <label>Father Name</label>
                <input class="form-control @error('fathername') is-invalid @enderror" type="text" name="fathername" placeholder="Father Name" >
                 @error('fathername')
                <span style="color: red;" class="invalid-feedback" role="alert"> {{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label>Course Name </label>
                <select name="course_name" class="form-control select2 @error('course_name') is-invalid @enderror" style="width: 100%;">
                  <option value=""> Select </option>
                   @foreach($data['course_data'] as $item)
                  <option value="{{ $item->id}}">{{$item->name}} </option>
                  @endforeach
                  
                </select>
                 @error('course_name')
                <span style="color: red;" class="invalid-feedback" role="alert"> {{ $message }}</span>
                @enderror
              </div>
              <div class="form-group @error('gender') is-invalid @enderror">
               
                 <label>Gender </label> : <input type="radio" name="gender" value="1"> Male
                  <input type="radio" name="gender" value="2"> Female<br>
                  @error('gender')
                <span style="color: red;" class="invalid-feedback" role="alert"> {{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label>Date of Birth </label>
                 <input class="form-control" type="date" name="dof" >
              </div>
               <div class="form-group">
                <label>Mobile </label>
                 <input class="form-control @error('mobile') is-invalid @enderror" type="text" name="mobile" >
                  @error('mobile')
                <span style="color: red;" class="invalid-feedback" role="alert"> {{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label>Email </label>
                 <input class="form-control" type="email" name="email" >
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-12">
            	 <button type="submit" class="btn btn-success">Registartion</button>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         {{--  Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin. --}}
        </div>
      </div>
      <!-- /.row -->
     </form>

    </section>
    <!-- /.content -->
  </div> 
  @if(Session::has('success'))
<script>
	swal("Good job!", "Student Successfully Added", "success");
</script>
@endif
 @endsection

