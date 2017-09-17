<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicBranch extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
