<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tasks;

class TaskController extends Controller
{
    public function AddTask(Request $request)
    {
       $tasks = new Tasks();
       $tasks->title = $request->input('title');
       $tasks->description = $request->input('description');
       $tasks->Checked = $request->input('Checked');
       $tasks->save();
       return response()->json(['tasks' => $tasks],201);
    }
    
    public function GetTasks()
    {
        $tasks=Tasks::all();
        $response = ['tasks' => $tasks];
        return response()->json($response,200);
    }
}