<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
      $job = Job::with('employer')->latest()->simplePaginate(3);
      return view('jobs.index', [
      'jobs' => $job
    ]);
    }
    public function create()
    {

    }
    public function show()
    {

    }
    public function store()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }

}
