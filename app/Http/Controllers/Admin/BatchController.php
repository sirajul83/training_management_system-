<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Batch;
use Session;
class BatchController extends Controller
{
   
    public function add_batch()
    {
    	 return view('admin.add_batch');
    }

    public function save_batch(Request $request)
    {
    	$insert_data=new Batch;
    	$insert_data->name = $request->name;
    	$insert_data->batch_id = $request->batch_id;
    	$insert_data->teacher_name = $request->teacher_name;
    	$insert_data->start_date = $request->start_date;

    	$insert_data->save();
    	if($insert_data){
    		return redirect("batch_list")->with("success", "Successfully added");
    	}

    }

    public function batch_list()
    {
    	$batch_info = Batch::get();
    	return view("admin.batch_list", compact('batch_info'));
    }
    public function edit($id)
    {
    	$editbatch = Batch::where('id', $id)->frist();
    	return view("admin.batch_edit");
    }
}
