@extends('layouts.nav')

@section('content')
<div class="bg-gray-100  font-[sans-serif] overflow-hidden flex items-center justify-center mt-20">     
    <div class="container w-1/2  p-6 bg-white rounded-lg shadow-md  ">
        <a href="{{ route('offer.myoffer') }}" title="Back to home your offers" class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512">
                <path fill="#2d2522" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="mx-auto">
            <div class="">
                <h2 class="text-3xl font-extrabold text-mr mb-4">{{ $offer->title }}</h2>
                <p class="text-gray-700 text-sm   ">
                   {{ $offer->desc }}
                </p>

                
                    <div class="mt-6 ">
                        <div class="text-moinmaron text-sm  underline">Cerated By:</div>
                        <p class="ml-2 w-1/2">{{ $offer->company_name}}</p>
                    </div>

                    <div class="mt-6  ">
                        <div class="text-moinmaron text-sm  underline">Contract type:</div>
                        <p class="border my-2  w-1/4 font-semibold text-gray-600 rounded px-3  bg-gray-200">
                            {{ $offer->type_contrat }}</p>
                    </div>
               
                <div class="mt-4">
                  Skills
                </div>
                  @foreach ($skills as $skill )
                  <div class=" mt-2 text-xs inline-flex items-center font-bold leading-sm px-3 py-1 bg-bleu text-mr px-4 py-1  rounded-full gap-1">
                    <span>#</span>
                    <p>{{ $skill->name }}</p>

                </div>
                  @endforeach

                  <div>
                    <p class="underline">Application</p>
                  </div>
                <div>
                    @foreach ($jobApplications as  $jobApplication)
                        <p>Applied by</p>{{ $jobApplication->name }}
                    @endforeach
                </div>

                        
                   
               
            </div>
        </div>
    </div>
</div>
@endsection