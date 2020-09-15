@extends('admin.master');
@section("title")
Add Batch
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
   <form action="{{url('batch-register')}}" method="post">
		  	@csrf	
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Batch</h3>

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
                <label>Batch Name</label>
                <input class="form-control" type="text" name="name" placeholder="Course Name" >
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Batch ID </label>
                 <input class="form-control" type="text" name="batch_id" placeholder="Batch ID" >
              </div>

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Batch Teacher Name </label>
                <select name="teacher_name" class="form-control select2" style="width: 100%;">
                  <option> Select </option>
                  <option value="1">Zabed Khan</option>
                  <option value="2">Hasan Sheikh </option>
                  <option value="3">Abid Hossain</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label>Start Date </label>
                 <input class="form-control" type="date" name="start_date" >
              </div>
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
	swal("Good job!", "Batch Successfully Added", "success");
</script>
@endif
 @endsection

