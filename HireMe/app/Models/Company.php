<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends User
{
    use HasFactory;
    protected $fillable=['user_id','image','slogan','industry','desc','phone_number'];
}
