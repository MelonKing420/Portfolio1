<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', [
            'projects' => $projects,
        ]);
    }

    public function edit(Project $project)
    {
        $tools = Tool::all();
        return view('admin.projects.edit', [
            'project' => $project,
            'tools' => $tools,
        ]);

    }

    public function update(Project $project, Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:255|min:2',
            'picture' => 'required|mimes:jpg,png',
            'description' => 'required|max:255|min:2',
            'github' => 'required|max:255|min:2',
        ]);
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->github = $request->input('github');
        $project->active = $request->input('active');
        $project->framework = $request->input('framework');

        if ($request->hasFile('picture')) {
            Storage::delete($project->picture);
            $project->picture = $request->file('picture')->store('projects');
        }

        $project->tools()->sync($request->tools); // attach = toevoegen. delete/dettach = verwijderen. sync = toevoegen en verwijderen

        $project->save();
        return redirect()->route('admin.projects.list');

    }


    public function create()
    {
        $tools = Tool::all();
        return view('admin.projects.create', [
            'tools' => $tools,
        ]);

    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:255|min:2',
            'picture' => 'required|mimes:jpg,png',
            'description' => 'required|max:255|min:2',
            'github' => 'required|max:255|min:2',
        ]);
        $project = new Project();
        $project->title = $request->input('title');
        $project->picture = $request->file('picture')->store('projects');
        $project->description = $request->input('description');
        $project->github = $request->input('github');
        $project->active = $request->input('active');
        $project->framework = $request->input('framework');
        $project->user_id = '1';
        $project->save();
        $project->tools()->attach($request->tools);
        return redirect()->route('admin.projects.list');


    }

    public function destroy(Project $project)
    {
        $project->tools()->detach();
        $project->delete();
        return redirect()->route('admin.projects.list');
    }
}
