<?php

namespace App\Models;


use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function cvs(){
        return $this->belongsToMany(Cv::class);
    }
}
