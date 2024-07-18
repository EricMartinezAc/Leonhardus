<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function Level()
    {
        return $this->belongsTo(Level::class);
    }
}
