<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('id', 'DESC')->get();
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        $categories = Category::select('id', 'name')->get();

        return view('jobs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Job::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);
        return redirect( route('jobs.index') );
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);

        return view('jobs.show', compact('job'));
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $categories = Category::select('id', 'name')->get();

        return view('jobs.edit',[
            'job' => $job,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        //validation
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id'
        ]);

        $job = Job::findOrFail($id);

        $job->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

         return redirect( route('jobs.show', $id) );
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        $job->delete();

        return redirect( route('jobs.index') );
    }
}
