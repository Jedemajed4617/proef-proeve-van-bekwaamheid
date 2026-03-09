<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    protected $fillable = ['name', 'start_date', 'end_date'];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
