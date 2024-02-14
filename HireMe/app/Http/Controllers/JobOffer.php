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
        $validatedData['company_name'] =$user->name;
        $validatedData['company_id'] = $company->id;
        
        $jobOffer = ModelsJobOffer::create($validatedData);
        
        

        foreach ($skills as $skill) {
            $existingSkill = Skill::firstOrCreate(['name' => $skill]);
            $jobOffer->skills()->attach($existingSkill->id);
        }
    
        return redirect()->route('offer.myoffer')->with('success', 'Experience created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $offers=ModelsJobOffer::all();
        return view('offer.offers',compact('offers'));
    }
    public function apply(Request $request, $offerId)
    {
        $jobSeeker = auth()->user()->jobSeeker;
    
        $jobOffer = ModelsJobOffer::findOrFail($offerId);
        $alreadyApplied = $jobSeeker->jobOffers()->where('job_offer_id', $jobOffer->id)->exists();
    
        if ($alreadyApplied) {
            return redirect()->back()->with('error', 'Vous avez déjà postulé à cette offre d\'emploi.');
        }
    
        $jobSeeker->jobOffers()->attach($jobOffer);
    
        return redirect()->back()->with('success', 'Votre candidature a été soumise avec succès.');
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer=ModelsJobOffer::findOrfail($id);
       $offer->delete();
       return redirect()->route('offer.myoffer');
    }
}
