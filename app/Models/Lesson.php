<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'level'
    ];

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}