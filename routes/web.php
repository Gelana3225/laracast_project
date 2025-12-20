<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

use App\Models\Job;

Route::get('/jobs/create', function() {
    return view('jobs.create');

});

Route::get('/', function () {
       return view('home');
});

Route::get('/jobs', [JobController::class, 'index']);



Route::get('/jobs/{job}', function (Job $job) {
  
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function() {
    request()->validate([
          'title' => ['required', 'min:3'],
          'salary' => ['required']
    ]);
    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=> 1,

    ]);
    return redirect('/jobs');
});

Route::get('/jobs/{job}/edit', function (Job $job) {
    // $job = Job::find($job);

    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{job}', function (Job $job) {
request()->validate([
          'title' => ['required', 'min:3'],
          'salary' => ['required']
    ]);


    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    return redirect('/jobs/'. $job->id);
});

Route::delete('/jobs/{job}', function (Job $job) {

    $job->delete();
    return redirect('/jobs');
});



Route::get('/contact', function () {
    return view('contact');
});
