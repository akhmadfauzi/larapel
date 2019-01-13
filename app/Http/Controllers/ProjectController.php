<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(){
        $projects = Project::all();

        //return view('projects.index')->with('projects', $projects);
        return view('projects.index', compact('projects'));
    }
    
    public function create(){
        $projects = Project::all();

        return view('projects.create');
    }
    
    public function show(Project $project){
        return view('projects.show', compact('project'));
    }
    
    public function edit(Project $project){
        return view('projects.edit', compact('project'));
    }
    
    public function update(Project $project){
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }
    
    public function destroy($id){
        Project::destroy($id);
        return \redirect('/projects'); 
    }
    
    public function store(){

        Project::create(request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]));

        return redirect('/projects');
    }

}
