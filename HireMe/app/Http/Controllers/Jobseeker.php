<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Jobseeker as ModelsJobseeker;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('jobseeker_images', 'public');
                $Jobseeker['image'] = $imagePath;

            }
            
            $Jobseeker['user_id']=Auth::id();
            // dd( $Jobseeker['user_id']);
        // dd($Jobseeker);
            // Store validated data
            $Jobseeker = ModelsJobseeker::create($Jobseeker);
        
            return redirect()->route('user.profile');
        }
    
            // return redirect()->route('user.', ['slug' => $post->slug, 'id' => $post->id])->with('success','article  été bien créer');
        
    

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
