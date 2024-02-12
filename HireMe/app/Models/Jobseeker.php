<?php

namespace App\Models;

use App\Models\Cv;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobseeker extends User
{
    use HasFactory;
    protected $fillable=['user_id','image','title','post','industry','adresse','phone','about'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cv(){
        return $this->hasOne(Cv::class);
    }
}
