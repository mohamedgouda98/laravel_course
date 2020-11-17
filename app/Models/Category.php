<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }

    public function attachTo(Job $job)
    {
        $this->jobs()->attach($job);
    }
}
