@extends('layouts.nav')

@section('content')
    <div class="font-[sans-serif] p-4">
        <div class=" max-md:max-w-lg mx-10 mt-4">
            <div class="flex items-center justify-end">
                <a href="{{ route('offer.create') }}"
                    class="text-xl font-semibold text-bleuc hover:bg-bleuc hover:text-white inline-block border border-bleu bg-bleu py-3 rounded   px-4">Create New
                    job offer</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                @forelse ($offers as $offer)
                    <div
                        class="w-full bg-white cursor-pointer border border-bleu rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-105 transition-all duration-300">
                        <div class="p-6 ">
                            <h3 class="text-xl font-bold text-[#333]">{{ $offer->title }}</h3>
                            <div class="flex mt-1">
                                <i class="fas fa-briefcase mr-2 text-lg text-blueGray-600"></i>
                                <p class="text-xl  text-gray-800">{{ $offer->company_name }}</p>
                            </div>

                            <p class="border my-2  w-1/4 font-semibold text-gray-600 rounded px-3  bg-gray-200">
                                {{ $offer->type_contrat }}</p>
                            <p class="text-sm mt-4 text-gray-600">{{ $offer->desc }}</p>
                            <h5 class="font-semibold text-gray-700 mt-2">Skills</h5>
                            <ul class="list-disc pl-4 text-gray-600">
                                @foreach ($offer->skills as $skill)
                                    <li class="text-gray-800">{{ $skill->name }}</li>
                                @endforeach
                            </ul>
                            <div class="flex items-center justify-end ">
                                <form action="{{ route('offer.destroy',['id'=>$offer->id]) }}" method="POST"
                                    class="mt-4 inline-block text-blue-600 text-sm hover:underline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="focus:outline-none">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgb(240, 13, 13);transform: ;msFilter:;">
                                        <path
                                            d="M8.586 18 12 21.414 15.414 18H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3.586zM5 4h14v12h-4.414L12 18.586 9.414 16H5V4z">
                                        </path>
                                        <path
                                            d="M9.707 13.707 12 11.414l2.293 2.293 1.414-1.414L13.414 10l2.293-2.293-1.414-1.414L12 8.586 9.707 6.293 8.293 7.707 10.586 10l-2.293 2.293z">
                                        </path>
                                    </svg>
                                    </button>
                                  </form>
                            </div>
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
