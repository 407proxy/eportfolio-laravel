<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Skill;
use App\Models\PageHeader;

class SkillController extends Controller
{
    public function index()
    {
        return view('skills', [
            'info'       => Info::first(),
            'skills'     => Skill::all(),
            'pageHeader' => PageHeader::where('page', 'skills')->first(),
        ]);
    }
}