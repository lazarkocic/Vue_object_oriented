<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['create', 'store']);
    }

    public function create()
    {
      $projects = Project::latest()->get();

      return view('projects/create', compact('projects'));
    }

    public function store(Request $request)
    {
      //dd($request);

      $this->validate($request, [
        'name' => 'required',
        'description' => 'required'
      ]);

      Project::create([
        'name' => request('name'),
        'description' => request('description')
      ]);

      return Redirect('/projects/create');
    }
}
