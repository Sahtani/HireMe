<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SkillController;
use App\Http\Requests\RequestOffer;
use App\Models\JobOffer as ModelsJobOffer;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\JobName;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class JobOffer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offer.create');
    }
    public function Myoffer()
    {
        $company = Auth::user()->company;
        $offers = $company->joboffers()->with('skills')->get();

        return view('offer.myoffer', compact('offers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestOffer $request)
    {

        $user = Auth::user();
        $company = Auth::user()->company;
        $validatedData = $request->validated();
        $skills = Arr::pull($validatedData, 'skills');
        $validatedData['company_name'] = $user->name;
        $validatedData['company_id'] = $company->id;

        $jobOffer = ModelsJobOffer::create($validatedData);
        foreach ($skills as $skill) {
            $existingSkill = Skill::firstOrCreate(['name' => $skill]);
            $jobOffer->skills()->attach($existingSkill->id);
        }

        return redirect()->route('offer.myoffer')->with('success', 'Joboffer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $offers=ModelsJobOffer::all();
        return view('offer.offers');
    }

    public function apply(Request $request, $offerId)
    {
        $jobSeeker = auth()->user()->jobSeeker;

        $jobOffer = ModelsJobOffer::findOrFail($offerId);
        $alreadyApplied = $jobSeeker->jobOffers()->where('job_offer_id', $jobOffer->id)->exists();

        if ($alreadyApplied) {
            return redirect()->back()->with('error', 'You have already applied for this job offer.');
        }

        $jobSeeker->jobOffers()->attach($jobOffer);

        return redirect()->back()->with('success', 'Your application has been submitted successfully.');
    }
    
    public function read($id)
    {

        $user = Auth::user();
        $offer = ModelsJobOffer::findOrfail($id);
        $skills = $offer->skills;
        $company = $user->company;
        $jobApplications = $company->jobOffers()->with('jobSeekers.user')->get();


        return view('offer.read', compact('offer', 'jobApplications', 'skills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $joboffer = ModelsJobOffer::findOrFail($id);
        $skills = $joboffer->skills()->get();
        return view('offer.update', compact('joboffer', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $joboffer = ModelsJobOffer::findOrFail($id);
        $joboffer->update([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'type_contrat' => $request->input('type_contrat'),
            'location' => $request->input('location'),
        ]);
        $skills = $request->input('skills', []);
        foreach ($skills as $skill) {
            $existingSkill = Skill::firstOrCreate(['name' => $skill]);
            $joboffer->skills()->attach($existingSkill->id);
        }


        return redirect()->route('offer.myoffer', $joboffer->id)->with('success', 'Job offer successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = ModelsJobOffer::findOrfail($id);
        $offer->delete();
        return redirect()->route('offer.myoffer');
    }
}
