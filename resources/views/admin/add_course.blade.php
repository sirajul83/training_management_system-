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
          <h3 class="box-title">Course</h3>

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
                <label>Couse Name</label>
                <input class="form-control" type="text" name="name" placeholder="Course Name" >
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Course Fee </label>
                 <input class="form-control" type="text" name="fee" placeholder="Course Fee" >
              </div>
              <div class="form-group">
                <label>Description </label>
                 <textarea class="form-control"  name="description"></textarea>
              </div>

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Course Id </label>
                 <input class="form-control" type="text" name="course_id" placeholder="Course Id" >
              </div>
              <!-- /.form-group -->
             {{--  <div class="form-group">
                <label>Disabled Result</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option disabled="disabled">California (disabled)</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div> --}}
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-12">
            	 <button type="submit" class="btn btn-primary">Submit</button>
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
	swal("Good job!", "Registeration Successfully", "success");
</script>
@endif
 @endsection

