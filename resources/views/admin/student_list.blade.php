@extends('admin.master');
@section("title")
Student list
@endsection
@section('content')
 <div class="content-wrapper">
    <section class="content">
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
                    <td>Batch Name  </td>
                    <td>Course Name  </td>
                    <td>Mobile  </td>
                    <td>Action</td>
                </tr>
               </thead>
                <?php $i=1;?>
                @foreach($student_list as $data)
                <tbody>
                  <tr>
                    <td> {{$i++}}</td>
                    <td> {{$data->name}}</td>
                    <td> {{$data->batch_id}}</td>
                    <td> {{$data->course_name}}</td>
                    <td> {{$data->start_date}}</td>
                    <td> <a href="{{ url('edit-student')}}/{{$data->id}}" class="btn btn-success">Edit</a>  <a href="{{ url('delete-student')}}/{{$data->id}}" class="btn btn-danger">Delete</a></td>
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
	swal("Good job!", "Student Added Successfully", "success");
</script>
@endif
 @endsection

