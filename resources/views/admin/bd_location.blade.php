@extends('admin.master');
@section("title")
Bd Location
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
   <form action="{{url('get-location')}}" method="post">
		  	@csrf	
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Bd Location</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
		  <div class="form-row">
		    <div class="form-group col-md-3">
		      <label for="inputState">	Division</label>
		      <select name="division" id="division" class="form-control" onchange=" return getDistrict()">
		      	<option selected>Select...</option>
		       @foreach($division_data as $data)
		        <option value="{{ $data->id}}">{{ $data->name}}</option>
		       @endforeach
		      </select>
		    </div>
		     <div class="form-group col-md-3" style="visibility:hidden;">
		      <label for="inputState">District</label>
		      <select name="district" id="district" class="form-control">
		      	<option selected>Select...</option>
		        @foreach($district_data as $data)
		        <option value="{{ $data->id}}">{{ $data->name}}</option>
		       @endforeach
		      </select>
		    </div>
		     <div class="form-group col-md-3">
		      <label for="inputState">Upazila</label>
		      <select name="upazila" id="upazila" class="form-control">
		       <option selected>Select...</option>
		        @foreach($upazila_data as $data)
		        <option value="{{ $data->id}}">{{ $data->name}}</option>
		       @endforeach
		      </select>
		    </div>
		     <div class="form-group col-md-3">
		      <label for="inputState">Union</label>
		      <select name="union" id="union" class="form-control">
		        <option selected>Select...</option>
		        @foreach($union_data as $data)
		        <option value="{{ $data->id}}">{{ $data->name}}</option>
		       @endforeach
		      </select>
		    </div>
		  </div>
  
{{--   <button type="submit" class="btn btn-primary">Sign in</button> --}}
		</form>
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
<script>
function getDistrict(){
var selectBox = document.getElementById('division');
var userInput = selectBox.options[selectBox.selectedIndex].value;
if (userInput == $data->id){
document.getElementById('district').style.visibility = 'visible';
    }else{
document.getElementById('district').style.visibility = 'hidden';
}
return false;}
</script>

@if(Session::has('success'))
<script>
	swal("Good job!", "Batch Successfully Added", "success");
</script>
@endif
 @endsection

