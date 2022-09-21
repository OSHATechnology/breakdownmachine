<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMesin extends Model
{
    use HasFactory;

    public function mesins(){
        return $this->belongsTo(Mesin::class,'id_mesin');
    }
}
