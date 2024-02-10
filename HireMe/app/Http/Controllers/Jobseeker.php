<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Jobseeker as ModelsJobseeker;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        
            return redirect()->route('user.show');
            // return view('user.dashbord');
        }
    
            // return redirect()->route('user.', ['slug' => $post->slug, 'id' => $post->id])->with('success','article  été bien créer');
        
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {  
        $jobseeker = ModelsJobseeker::where('user_id', Auth::id())->first();
        return view('user/dashbord', ['jobseeker' => $jobseeker, 'user' => Auth::user()]);
    }
// }
//         $jobseeker = ModelsJobseeker::where('user_id', Auth::id())->first();
//         // $Jobseeker=ModelsJobseeker::find(Auth::user())->get();
//        dd($jobseeker->email);
//         // Pass jobseeker information to your view for display
//         return view('user/dashbord', ['jobseeker' => $jobseeker]);
   
    

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
