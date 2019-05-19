<?php

namespace App\Http\Controllers;

use App\Project;
use App\Services\Twitter;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$projects = Project::all();
        $projects = Project::where('owner_id', auth()->id())->get();
        return view('project.index', ['projects' => $projects]);
    }

    public function show(Project $project)
    {
        // $project = Project::findorFail($id);
        // if($project->owner_id !== auth()->id())
        // {
        //     abort(403);
        // }
        //abort_if($project->owner_id !== auth()->id(), 403);
        //abort_unless(auth()->user()->owns($project), 403);
        //auth()->user()->can('update',$project);
        //$this->authorize('update', $project);
        //abort_if(\Gate::denies('update',$project), 403);
        //$this->authorize('update', $project);
        return view('project.show', compact('project'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store() 
    {
        // dd(request()->all());
        $attributes = request()->validate([
            'title' => ['required','min:3'],
            'description' => ['required', 'min:3']
        ]);
        $attributes['owner_id'] = auth()->id();
        Project::create($attributes);
        // Project::create(request(['title','description']));

        // return 'done';

        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/project');
    }

    public function edit(Project $project)
    {
        //$this->authorize('update', $project);
        return view('project.edit', compact('project'));
    }

    public function update(Project $project)
    {
        //$this->authorize('update', $project);
        $project->update(request(['title','description']));

        // $project->title = request('title');
        // $project->description = request('description');

        // $project->save();

        return redirect('/project');
    }

    public function destroy(Project $project)
    {
        //$this->authorize('update', $project);
        $project->delete();
        return redirect('/project');
    }
}
