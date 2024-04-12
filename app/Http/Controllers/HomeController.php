<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('pages.home');
    }
    public function projectPage(Request $request)
    {
        $projectData = json_decode(file_get_contents(storage_path('data/projects.json')));
        return view('pages.projects', compact('projectData'));
    }
    public function projectDetails(Request $request)
    {
        $projectData = json_decode(file_get_contents(storage_path('data/projects.json')));
        foreach ($projectData as $project) {
            if ($project->id == $request->id) {
                $selectedProject = $project;
                return view('components.projectDetails', compact('selectedProject'));
            }
        }
    }
}
