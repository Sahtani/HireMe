<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends User
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable=['user_id','image','slogan','industry','description','phone'];

    // protected $with = ['user'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function joboffers() {
        return $this->hasMany(JobOffer::class);
        
    }
}
    
