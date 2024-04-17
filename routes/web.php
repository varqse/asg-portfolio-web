<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('varqse/homepage', [MainController::class, 'VarsPage']);

Route::get('/edit-profile', [MainController::class, 'editProfilePage'])->name('edit-profile');

Route::post('/update-profile',[MainController::class, 'updateProfile'])->name('update-profile');

Route::get('varqse/projects', [MainController::class, 'ProjectPage'])->name('projects');

Route::post('varqse/add-project', [MainController::class, 'addProject'])->name('add-project');

Route::delete('varqse/delete-project/{id}', [MainController::class, 'deleteProject'])->name('delete-project');


