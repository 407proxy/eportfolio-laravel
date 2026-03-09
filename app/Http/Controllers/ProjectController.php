<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Info;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\PageHeader;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects', [
            'info'       => Info::first(),
            'projects'   => Project::all(),
            'pageHeader' => PageHeader::where('page', 'projects')->first(),
        ]);
    }
}