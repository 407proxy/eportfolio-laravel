<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects', ['projects' => Project::all()]);
    }
}
