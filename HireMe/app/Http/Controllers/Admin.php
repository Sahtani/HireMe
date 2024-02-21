<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\JobOffer;
use App\Models\Jobseeker;
use App\Models\User;
use Illuminate\Http\Request;

class Admin extends Controller
{
        private function getAlljobseeker()
        {
            return   Jobseeker::withTrashed()->count();
        }
        private function getAllcompany()
        {
            return   Company::withTrashed()->count();
        }
        private function getAlljoboffer()
        {
            return JobOffer::withTrashed()->count();
        }
        
        public function index()
        {
            $jobseekers = $this->getAlljobseeker();
            $companies = $this->getAllcompany();
            $jobOffers = $this->getAlljoboffer();

            $all = Jobseeker::with('user')->withTrashed()->get();
            return view('admin.dashboard', compact('jobseekers', 'companies', 'jobOffers', 'all'));
        }

    public function allCompanies()
    {
        $jobseekers = $this->getAlljobseeker();
        $companies = $this->getAllcompany();
        $jobOffers = $this->getAlljoboffer();

        $all_companies = Company::with('user')->withTrashed()->get();
        return view('admin.company', compact('all_companies','jobseekers', 'companies', 'jobOffers'));
    }
    public function allJoboffers()
    {
        $jobseekers = $this->getAlljobseeker();
        $companies = $this->getAllcompany();
        $jobOffers = $this->getAlljoboffer();

        $all_offers = JobOffer::withTrashed()->get();
        return view('admin.offer', compact('all_offers','jobseekers', 'companies', 'jobOffers'));
    }
}
