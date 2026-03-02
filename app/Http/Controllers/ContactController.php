<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', ['contacts' => Contact::all()]);
    }
}
