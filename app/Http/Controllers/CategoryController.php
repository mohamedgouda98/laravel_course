<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll()
    {
        return Category::all();
    }

    public function get($categoryId)
    {
        return Category::find($categoryId);
    }

    public function create()
    {
        $attributes = request()->validate([
            'title' => 'required',
        ]);

        return Category::create($attributes);
    }

    public function update()
    {
        $attributes = request()->validate([
            'id' => 'required',
            'title' => 'required',
        ]);

        $categoryToUpdate = Category::findOrFail($attributes->id);

        return $categoryToUpdate->update($attributes);
    }

    public function delete(Category $category)
    {
        return $category->delete();
    }

    public function jobs(Category $category)
    {
        return $category->jobs;
    }

    public function attachToJob(Category $category, Job $job) {
        return $category->attachTo($job);
    }
}
