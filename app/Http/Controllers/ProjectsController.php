<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tool;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {

        $projectsQuery = Project::where('active', 1);

        if ($request->has('tools')) {
            $projectsQuery->whereHas('tools', function ($toolsQuery) use ($request) {
                return $toolsQuery->whereIn('tools.id', $request->input('tools', [])); // heeft mijn project een tool die in de URL staat
            });
        }

        $projects = $projectsQuery->get();
        $tools = Tool::all();
        return view('projects', [
            'projects' => $projects,
            'tools' => $tools,
        ]);
    }

}


