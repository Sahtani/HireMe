<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\CreateRequest;
use App\Models\Company as ModelsCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Company extends Controller
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
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $company = $request->validated();

        // Handle image upload
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $filePath = $image->store('public/uploads');
            $fileName = explode("/", $filePath);
            $Jobseeker["image"] = $fileName[2];
        } else {
            $imageName = 'jobseeker.png';
        }

        $company['user_id'] = Auth::id();
        // Store validated data

        $company = ModelsCompany::create($company);


        return  redirect()->route('company.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $company = Auth::user()->company;
       
        return view("company.profile", compact('company', 'user'));
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
