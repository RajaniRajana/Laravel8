<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Task;

class AdminController extends Controller
{
    public function index(Request $req)
    {
    	$user=new User;
    	$user->name=$req->name;
    	$user->email=$req->email;
    	$user->password=Hash::make($req->password);
    	$user->role=$req->role;
    	$user->save();
        return redirect('list');
    }
    public function list()
    {
    	$data=user::all();
    	return view('list',['data'=>$data]);
    }
    public function delete($id)
    {
    	$user=User::find($id);
    	$user->delete();
    	return redirect('list');
    }
    public function task()
    {
    	$user=user::all()->where('role','employee');
        //$data=task::find(1);
    	$data=DB::table('tasks')->join('users','users.id','=','tasks.user_id')->get();
    	return view('task',['data'=>$user],['dat'=>$data]);
    }
    public function gettask(Request $req)
    {
		$task=new Task;
    	$task->taskdescription=$req->description;
    	$task->user_id=$req->userid;
    	$task->save();
    	return redirect('task');
    }
}
