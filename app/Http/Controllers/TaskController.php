<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
   	public function index() {

    	$tasks = Task::all();
    	return view('welcome', ['tasks' => $tasks]);    	
	}

	public function show($task_id) {

    	$task = Task::find($task_id);
    	return Response::json($task);
	}

	public function create(Request $request) {

    	$task = Task::create($request->all());
    	return Response::json($task);
	}

	public function edit(Request $request,$task_id) {
    	
    	$task = Task::find($task_id);
    	$task->task = $request->task;
    	$task->description = $request->description;
    
    	$task->save();

    	return Response::json($task);
	}

	public function delete($task_id) {

    	$task = Task::destroy($task_id);
    	return Response::json($task);
	}
}
