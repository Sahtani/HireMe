<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\JobOffer;
use App\Models\Jobseeker;
use App\Models\User;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        $jobseekers = Jobseeker::count();
        $companies = Company::count();
        $jobOffers = JobOffer::count();
        $all=Jobseeker::with('user')->get();
        return view('admin.dashboard', compact('jobseekers', 'companies', 'jobOffers','all'));
    }

    public function allCompanies(){
        $companies=Company::with('company')->get();
        return view('admin.company',compact('companies'));
    }
    public function allJoboffers(){
     $offers=JobOffer::all();
     return view('admin.offer',compact('offers'));
    }
}
