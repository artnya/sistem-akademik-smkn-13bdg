<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reports;
use Auth;
use Carbon\Carbon;

class ReportsController extends Controller
{
    public function viewTask()
    {
    	$viewTask = Reports::orderBy('created_at', 'ASC')->get();
    	return view('taskadmin.index', compact('viewTask'));
    }

    public function read(Request $request, $id)
    {
    		$read= Reports::find($id);
    		$read->read_at = 1;
    		$read->save();
    		return redirect()->back();
    }

/* on development...
    public function readAllTask(Request $request)
    {
    	$read = 'readed';
    	$checkunreadTask = Reports::where('read_at', '=', NULL)->get();
    	$progress = 
    	return redirect()->back();
    }
*/

    public function delete()
    {

    }
}
