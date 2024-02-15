<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

ini_set('max_execution_time', 3600); // 3600 seconds = 60 minutes
set_time_limit(3600);
class CvController extends Controller
{
    public function downloadCV()
    {  
        
        $user= Auth::user();  
        $jobseeker = Auth::user()->jobseeker;
        $exs = $jobseeker->cv->experiences;
        $cursus = $jobseeker->cv->cursus;
        $skills = $jobseeker->cv->skills;
        $langues = $jobseeker->cv->langues;
        $pdf =  Pdf::loadView('user/cv', compact('jobseeker','user','exs','skills','cursus','langues'));
        
    
        // return $pdf->stream();
        return $pdf->download('cv.pdf');
    }
}
