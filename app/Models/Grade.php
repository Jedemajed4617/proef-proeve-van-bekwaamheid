<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['name'];

    public function assignments()
    {
        return $this->belongsToMany(Assignment::class, 'assignment_grade');
    }
}