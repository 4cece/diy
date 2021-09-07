<?php

namespace App\Models;

use App\Models\Receipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Level extends Model
{
    use HasFactory;


    public function receipe() {

        return $this->belongsTo(Receipe::class);
    }
}
