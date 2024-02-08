<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobseeker extends User
{
    use HasFactory;
    protected $fillable=['user_id','image','title','post','industry','adresse','phone','about'];
}
