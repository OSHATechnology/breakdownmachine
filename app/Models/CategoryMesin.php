<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMesin extends Model
{
    use HasFactory;

    public function mesins(){
        return $this->hasMany(Mesin::class,'id_category');
    }
}
