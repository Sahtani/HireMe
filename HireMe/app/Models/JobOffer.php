<?php

namespace App\Models;
use App\Models\Jobseeker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;
    protected $fillable=['company_name','title','desc','type_contrat','location','company_id'];
    public function company() {
        return $this->belongsTo(Company::class);
        
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
    public function jobSeekers(){
        return $this->belongsToMany(Jobseeker::class);
    }
}
