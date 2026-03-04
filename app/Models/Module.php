<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['school_year_id', 'name', 'date_from', 'date_till', 'sort_order'];

    public function schoolYear()
    {
        return $this->belongsTo(SchoolYear::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class)->orderBy('sort_order');
    }
}