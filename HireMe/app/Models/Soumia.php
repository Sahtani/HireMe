<?php

namespace App\Models;

use App\Models\Mohamed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soumia extends Model
{
    use HasFactory;
    public function mohameds(){
        return $this->hasMany(Mohamed::class);
    }
  
}
