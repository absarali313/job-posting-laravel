<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function index()
    {
        return view('job.index');
    }

    public function create()
    {
        return view('job.create');
    }

    public function store(Request $request)
    {
        $job_details = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'type' => ['required', Rule::in(['Full-time', 'Part-time'])],

            'tags' => ['required']
        ]);
        $employer = Employer::where('user_id', Auth::id())->first();

        $job = Job::create([
            'title' => $job_details['title'],
            'salary' => $job_details['salary'],
            'type' => $job_details['type'],
            'featured' => false,
            'employer_id' => $employer['id']
        ]);
        $tag = Tag::firstOrCreate(['name' => $job_details['tags']]);
        $job->tags()->attach($tag);

        return redirect('/');
    }
}
