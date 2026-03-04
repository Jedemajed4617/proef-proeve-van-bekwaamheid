<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['module_id', 'name', 'planned_at', 'sort_order'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'assignment_grade');
    }
}
