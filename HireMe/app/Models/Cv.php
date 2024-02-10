<?php

namespace App\Models;

use App\Models\Competence;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    public function skills()
    {
        return $this->hasMany(Competence::class);
    }

   

    // public function cursus()
    // {
    //     return $this->hasMany(Cursus::class);
    // }

    // public function langues()
    // {
    //     return $this->belongsToMany(Langue::class);
    // }
}
