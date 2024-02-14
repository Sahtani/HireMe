@extends('layouts.nav')

@section('content')
<div class="font-[sans-serif] p-4">
    <div class="max-w-6xl max-md:max-w-lg ml-20 mt-4">
        <div>
            <a href="{{ route('offer.create') }}"
                class="text-2xl font-bold text-[#333] inline-block border border-bleu bg-bleu py-3 rounded rounded-full   px-4">New
                offer</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
            @forelse ($offers as $offer)
            <div class="flex max-lg:flex-col bg-white cursor-pointer border border-bleu rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-105 transition-all duration-300">
                <div class="p-6 ">
                    <h3 class="text-xl font-bold text-[#333]">{{ $offer->title }}</h3>
                    <div class="flex mt-1">
                        <i class="fas fa-briefcase mr-2 text-lg text-blueGray-600"></i>
                        <p class="text-xl  text-gray-800">{{ $offer->company_name }}</p>
                    </div>

                    <p class="border my-2  w-1/3 font-semibold text-gray-600 rounded px-2 bg-gray-200">
                        {{ $offer->type_contrat }}</p>
                    <p class="text-sm mt-4 text-gray-600">{{ $offer->desc }}</p>
                    <h5>Skills</h5>
                    <ul class="list-disc pl-4 text-gray-600">
                        @foreach ($offer->skills as $skill)
                        <li class="text-gray-600">{{ $skill->name }}</li>
                        @endforeach
                    </ul>
                    <a href="javascript:void(0);"
                        class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read More</a>
                </div>
            </div>
            @empty
            <div class="p-6">
                <p class="text-gray-600">No job offers available.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
