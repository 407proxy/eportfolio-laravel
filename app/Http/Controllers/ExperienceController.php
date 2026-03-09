<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Info;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\PageHeader;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $pageHeader = PageHeader::where('page', 'experience')->first();
        return view('experiences', compact('experiences', 'pageHeader'));
    }
}
