<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'category_id'
    ];


    //Jobs belongsTo one Category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
