<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Batch;
use App\Course;
use App\Division;
use App\District;
use App\Upazila;
use App\Union;
use Session;
class StudentController extends Controller
{

	public function student_list()
	{
		$student_list= Student::get();
		return view("admin.student_list",compact('student_list'));
	}
    public function add_student()
    {
    	$data['batch_data'] = Batch::get();
    	$data['course_data'] = Course::get();
    	return view("admin.add_student", compact("data"));
    }

    public function save_student(Request $request)
    {

    	 $valuid= $this->validate($request,[
         'name'=>'required',
         'course_name'=>'required',
         'batch_id'=>'required',
         'mobile'=>'required',
         'gender'=>'required',
         'fathername'=>'required',
         'religion'=>'required',
      	]);


    	$student_save = new Student;
    	$student_save->name = $request->name;
    	$student_save->mothername = $request->mothername;
    	$student_save->fathername = $request->fathername;
    	$student_save->religion = $request->religion;
    	$student_save->course_name = $request->course_name;
    	$student_save->batch_id = $request->batch_id;
    	$student_save->address = $request->address;
    	$student_save->gender = $request->gender;
    	$student_save->mobile = $request->mobile;
    	$student_save->dof = $request->dof;
    	$student_save->email = $request->email;


    	// echo "<pre>";
    	// print_r($student_save);exit();

    	$student_save->save();
    	if($student_save){
    		Session::flash('success');
	   		//return redirect()->back();
	   		return redirect("student_list")->with("success", "Successfully Student Added");
    	}

    }
    public function edit($id)
    {
    	$get_student = Student::where("id", $id)->first();

    	$data['batch_data'] = Batch::get();
    	 $data['course_data'] = Course::get();
    	return view("admin.edit_student", compact('data','get_student'));
    	
    }
    public function update(Request $request)
    {
    	$student_data = Student::find($request->id);
    	$student_data->name = $request->name;
    	$student_data->mothername = $request->mothername;
    	$student_data->fathername = $request->fathername;
    	$student_data->religion = $request->religion;
    	$student_data->course_name = $request->course_name;
    	$student_data->batch_id = $request->batch_id;
    	$student_data->address = $request->address;
    	$student_data->gender = $request->gender;
    	$student_data->mobile = $request->mobile;
    	$student_data->dof = $request->dof;
    	$student_data->email = $request->email;
    	// echo "<pre>";
    	// print_r($student_data);

    	$student_data->save();
    	if($student_data){
    		Session::flash('success');
	   		//return redirect()->back();
	   		return redirect("student_list")->with("success", "Successfully Student Updated");
    	}

    }
   public function view_location()
    {
        $division_data = Division::get();
        $district_data = District::get();
        $upazila_data = Upazila::get();
        $union_data = Union::get();
        return view("admin.bd_location", compact(
            'division_data',
            'district_data',
            'upazila_data',
            'union_data'
        ));
    }
}
