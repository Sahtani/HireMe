@extends('layouts.nav')

@section('content')
    <div class="bg-gray-100  font-[sans-serif]   flex items-center justify-center mt-20">
        <div class="container w-1/2  p-6 bg-white rounded-lg shadow-md  ">
            <a href="{{ route('offer.myoffer') }}" title="Back to home your offers" class="pb-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512">
                    <path fill="#2d2522"
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
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
                        <p class="ml-2 w-1/2">{{ $offer->company_name }}</p>
                    </div>

                    <div class="mt-2  ">
                        <div class="text-moinmaron text-sm  underline">Contract type:</div>
                        <p class="border my-2  w-1/4 font-semibold text-gray-600 rounded px-3  bg-gray-200">
                            {{ $offer->type_contrat }}</p>
                    </div>

                    <div class="mt-4">
                        Skills
                    </div>
                    @foreach ($skills as $skill)
                        <div
                            class=" mt-2 text-xs inline-flex items-center font-bold leading-sm px-3 py-1 bg-bleu text-mr px-4 py-1  rounded-full gap-1">
                            <span>#</span>
                            <p>{{ $skill->name }}</p>

                        </div>
                    @endforeach

                    @if ($offer->jobSeekers->isNotEmpty())
                        <div class="mt-4">
                            <p class="underline">Application</p>
                        </div>
                        <div class="mt-2 ml-4">
                            <span>Applied by:</span>
                            @foreach ($offer->jobSeekers as $jobSeeker)
                                <p class="pl-2">{{ $jobSeeker->user->name }} </p>
                                <p class="pl-2 underline text-bleuc">{{ $jobSeeker->user->email }}</p>
                            @endforeach
                        </div>
                    @endif


                    {{-- <a href="{{ route('offer.apply', ['id' => $offer->id]) }}"
                        class="mt-4 inline-block text-blue-600 text-sm hover:underline">
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 font-semibold">
                            <div class="flex gap-3">
                                <span>
                                   View cv
                                </span>

                                <svg xmlns="http://www.w3.org/2000/svg" width=15 viewBox="0 0 512 512">
                                    <path fill="#ffffff"
                                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                                </svg>
                            </div>
                        </button>
                    </a> --}}


                </div>
            </div>
        </div>
    </div>
@endsection
