<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function academicBranches()
    {
        return $this->belongsToMany(AcademicBranch::class);
    }

    public function academicYears()
    {
        return $this->belongsToMany(AcademicYear::class);
    }
}


