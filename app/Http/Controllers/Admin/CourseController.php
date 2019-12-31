<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use Session;
class CourseController extends Controller
{
	public function course_list()
	{
		$course_info = Course::get();
		return view("admin.course_list", compact('course_info'));
	}
    public function add_course()
    {
    	return view('admin.add_course');

    }
    public function store(Request $request)
    {
   
	    $store_data = new Course;
	   	$store_data['name'] = $request->name;
	   	$store_data['course_id'] = $request->course_id;
	   	$store_data['fee'] = $request->fee;
	   	$store_data['description'] = $request->description;
	   	$store_data->save();
	   	Session::flash('success');
	   	return redirect()->back();
    }
    public function edit($id)
    {
    	$courseedit= Course::where("id", $id)->first();
    	return view("admin.edit_course",['course_info'=>$courseedit]); 
    }
    public function update(Request $request)
    {
    	//echo "echo";exit();
    	$cid = Course::find($request->cid);
    	$cid->name = $request->name;
    	$cid->fee = $request->fee;
    	$cid->course_id = $request->course_id;
    	$cid->description = $request->description;
    	$cid->save();
    		Session::flash('success');
	   	return redirect()->back();
    }

    public function delete($id)
    {
    	$delete= Course::where('id',$id)->delete();
    	if($delete){
    		Session::flash('success');
	   		return redirect()->back();
    	}
    }
}
