<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
