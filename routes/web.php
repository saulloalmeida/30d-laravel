<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){
    return view('jobs.index',
    ['jobs' => Job::with('employer')
            ->latest()
            ->simplePaginate(5)
        ]);
});

Route::get('/jobs/create', function (){
    return view('jobs.create', ['jobs' => Job::with('employer')->paginate(5)]);
});

Route::post('/jobs', function(){
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=> 1
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function($id){
    $job = Job::findOrFail($id);
    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // authorize (On hold...)

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{id}', function($id){
    Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

Route::get('/jobs/{id}', function($id){
    return view('jobs.show', ['job' => Job::find($id)]);
});





Route::get('/contact', function(){
    return view('contact');
});
