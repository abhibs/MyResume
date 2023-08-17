<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeProfileController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\ResumeController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\CertificateController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\ContactController;




Route::get('/testing', function () {
    echo "Abhiram";
});

Route::get('profile', [HomeProfileController::class, 'profile']);
Route::get('about', [AboutController::class, 'about']);
Route::get('resume', [ResumeController::class, 'resume']);
Route::get('projects', [ProjectController::class, 'projects']);
Route::get('certificates', [CertificateController::class, 'certificates']);
Route::get('reviews', [ReviewController::class, 'reviews']);
Route::post('contact', [ContactController::class, 'contact']);