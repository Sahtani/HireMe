<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable=['title','company','periode','desc'];
    public function cv(){
        return $this->belongsTo(Cv::class);
    }
}
