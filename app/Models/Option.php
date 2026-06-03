<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'exercise_id',
        'option_text',
        'is_correct'
    ];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}