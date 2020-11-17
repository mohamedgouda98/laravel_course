<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Create
    // Update
    // Delete
    // Get

    public function getAll()
    {
        return Job::all();
    }

    public function get(Job $job)
    {
        return $job;
    }

    public function create()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required | max:2500',
            'years_of_experience' => 'required'
        ]);

        return Job::create($attributes);
    }

    public function update()
    {
        $attributes = request()->validate([
            'id' => 'required',
            'title' => 'required',
            'description' => 'required | max:2500',
            'years_of_experience' => 'required'
        ]);

        $jobToUpdate = Job::findOrFail($attributes->id);

        return $jobToUpdate->update($attributes);
    }

    public function delete(Job $job)
    {
        return $job->delete();
    }

    public function categories(Job $job)
    {
        return $job->categories;
    }

    public function attachToCategory(Job $job, Category $category)
    {
        return $job->attachTo($category);
    }
}
