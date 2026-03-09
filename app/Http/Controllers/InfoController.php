<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Info;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\PageHeader;

class InfoController extends Controller
{
    public function index()
    {
        return view('home', [
            'info' => Info::first(), // single profile row
        ]);
    }
}
