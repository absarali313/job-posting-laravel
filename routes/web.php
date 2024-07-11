<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = Job::all();
    $tags = Tag::all();
    return view('job.index' , ['jobs' => $jobs , 'tags' => $tags]);
});
Route::get('/job/create', function () {
    return view('job.create');
});
Route::post('/job', [JobController::class, 'store']);
Route::controller(RegisteredUserController::class)->group(function(){
    Route::get('/register','create');
    Route::post('/register','store');

});



Route::controller(SessionController::class)->group(function(){

    Route::post('/login','store');
    Route::get('/login','create');
    Route::post('/logout','destroy');

});

