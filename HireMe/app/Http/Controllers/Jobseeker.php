<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateRequest;
use App\Models\Cv;
use App\Models\Jobseeker as ModelsJobseeker;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Jobseeker extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        public function store(CreateRequest $request)
        { 
            
            $Jobseeker = $request->validated();
            // Handle image upload
            if (request()->hasFile('image')) {
                $image = request()->file('image');
                $filePath = $image->store('public/uploads');
                $fileName = explode("/", $filePath);
                $Jobseeker["image"] = $fileName[2];
            } else {
                $imageName = 'jobseeker.png';
            }
            
            $Jobseeker['user_id']=Auth::id();

            $Jobseeker = ModelsJobseeker::create($Jobseeker);
            $cv=Cv::create(['jobseeker_id'=>$Jobseeker->id

            ]);
        
            return redirect()->route('user.show');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
  
    { 
        
        $jobseeker = Auth::user()->jobseeker;  
        $exs=$jobseeker->cv->experiences;
        $cursus=$jobseeker->cv->cursus;
        $skills=$jobseeker->cv->skills;
        $langues=$jobseeker->cv->langues;

        return view('user/profile', ['jobseeker' => $jobseeker, 'user' => Auth::user(),'exs'=>$exs,'cursus'=>$cursus,'skills'=>$skills,'langues'=>$langues]);
    }

    public function showcv() 
    { 
        
        $jobseeker = Auth::user()->jobseeker;
        
        $exs=$jobseeker->cv->experiences;
        $cursus=$jobseeker->cv->cursus;
        $skills=$jobseeker->cv->skills;
        $langues=$jobseeker->cv->langues;

        return view('user/cv', ['jobseeker' => $jobseeker, 'user' => Auth::user(),
        'exs'=>$exs,'cursus'=>$cursus,'skills'=>$skills,'langues'=>$langues]);
    }
   



 
    

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsed
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
