<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);
        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);
        return back();
    }


    // public function update(Task $task)
    // {
    //     // request()->has('completed') ? $task->complete() : $task->incomplete();
    //     // if(request()->has('completed')) {
    //     //     $task->complete();
    //     // } else {
    //     //     $task->incomplete();
    //     // }

    //     // dd(request()->all());
    //     // $task->complete(request()->has('completed'));
    //     // $task->update([
    //     //     'completed' => request()->has('completed')
    //     // ]);
        
    //     $method = request()->has('completed') ? 'complete' : 'incomplete';
    //     $task->$method;

    //     return back();
    // }

    

    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
