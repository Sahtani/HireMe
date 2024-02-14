<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SkillController;
use App\Http\Requests\RequestOffer;

use App\Models\JobOffer as ModelsJobOffer;
use App\Models\Skill;
use Illuminate\Http\Request;
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
        $company = Auth::user()->company;
        
       
        $validatedData = $request->validated();
        $skills = Arr::pull($validatedData, 'skills');
   
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
    public function show($id)
    {
        //
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
        //
    }
}
