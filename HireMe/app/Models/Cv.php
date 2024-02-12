<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable=['jobseeker_id'];


    public function jobseeker(){
        return $this->belongsTo(Jobseeker::class);
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function cursus()
    {
        return $this->hasMany(Cursus::class);
    }

    public function langues()
    {
        return $this->belongsToMany(Language::class);
    }
}
