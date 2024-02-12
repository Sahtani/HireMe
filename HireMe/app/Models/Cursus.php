<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursus extends Model
{
    use HasFactory;
    protected  $fillable=['diplome','etablissement','start_date','end_date','cv_id'];
    public function jobseeker(){
        return $this->belongsTo(Cv::class);
    }
}
