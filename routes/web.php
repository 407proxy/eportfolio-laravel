<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;

Route::middleware('log.visit')->group(function () {
    Route::get('/', [InfoController::class, 'index'])->name('home');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/skills', [SkillController::class, 'index'])->name('skills');
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});