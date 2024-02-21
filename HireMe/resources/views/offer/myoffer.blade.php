@extends('layouts.nav')

@section('content')
@if(session('success'))
<div class="w-full">
    <div class="flex items-center p-4  w-1/2 p-4 ml-12 mt-4 text-xl text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <div>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    </div>
</div>
@endif
    <div class="font-[sans-serif] p-4">
        <div class=" max-md:max-w-lg mx-10 mt-4">
            <div class="flex items-center justify-end">
                <a href="{{ route('offer.create') }}"
                    class="text-xl font-semibold text-bleuc hover:bg-bleuc hover:text-white inline-block border border-bleu bg-bleu py-3 rounded   px-4">Create
                    New
                    job offer</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
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
                                <p class="text-sm mt-4 text-gray-600">
                                    {{ substr($offer->desc, 0, 100) }}{{ strlen($offer->desc) > 100 ? '...' : '' }}
                                </p>
                                
                            <h5 class="font-semibold text-gray-700 mt-2">Skills</h5>
                           
                                @foreach ($offer->skills as $skill)
                                <div class=" mt-2 text-xs inline-flex items-center font-bold leading-sm px-3 py-1 bg-bleu text-mr px-4 py-1  rounded-full gap-1">
                                    <span>#</span>
                                    <p>{{ $skill->name }}</p>
                
                                </div>
                                @endforeach
                           
                            <div class="flex items-center justify-between ">
                                <a href="{{ route('offer.read', ['id' => $offer->id]) }}"
                                    class="text-blue-500 hover:underline">Read more</a>
                                <form action="{{ route('offer.destroy', ['id' => $offer->id]) }}" method="POST"
                                    class="mt-4 inline-block text-blue-600 text-sm hover:underline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: rgb(240, 13, 13);transform: ;msFilter:;">
                                            <path
                                                d="M8.586 18 12 21.414 15.414 18H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3.586zM5 4h14v12h-4.414L12 18.586 9.414 16H5V4z">
                                            </path>
                                            <path
                                                d="M9.707 13.707 12 11.414l2.293 2.293 1.414-1.414L13.414 10l2.293-2.293-1.414-1.414L12 8.586 9.707 6.293 8.293 7.707 10.586 10l-2.293 2.293z">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                                <a href="{{ route('offer.edit', ['id' => $offer->id]) }}"
                                    class="mt-4 inline-block text-blue-600 text-sm hover:underline">

                                    <button type="button" class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: rgba(36, 196, 36, 1);transform: ;msFilter:;">
                                            <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z">
                                            </path>
                                            <path
                                                d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
                                            </path>
                                        </svg>
                                    </button>
                                </a>
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
