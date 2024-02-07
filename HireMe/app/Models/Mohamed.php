<?php

namespace App\Models;

use App\Models\Soumia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mohamed extends Model
{
    use HasFactory;
    public function soumias(){
        return $this->hasMany(Soumia::class);
    }
  
}
