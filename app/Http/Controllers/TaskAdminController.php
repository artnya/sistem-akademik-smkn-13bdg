<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TaskAdmin;
use Auth;
use Carbon\Carbon;

class TaskAdminController extends Controller
{
    public function viewTask()
    {
    	$viewTask = TaskAdmin::orderBy('created_at', 'ASC')->get();
    	return view('taskadmin.index', compact('viewTask'));
    }

    public function read(Request $request, $id)
    {
    		$read= TaskAdmin::find($id);
    		$read->read_at = 1;
    		$read->save();
    		return redirect()->back();
    }

/* on development...
    public function readAllTask(Request $request)
    {
    	$read = 'readed';
    	$checkunreadTask = TaskAdmin::where('read_at', '=', NULL)->get();
    	$progress = 
    	return redirect()->back();
    }
*/

    public function delete()
    {

    }
}
