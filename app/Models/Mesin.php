<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(CategoryMesin::class,'id_category');
    }
    public function details(){
        return $this->hasMany(DetailMesin::class,'id_mesin');
    }
}
