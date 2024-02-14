@extends('layouts.nav')

@section('content')
    @if (session('error'))
        <div class="flex items-center w-1/2  p-4 ml-12 mt-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="flex items-center p-4 w-1/2  p-4 ml-12 mt-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium"> {{ session('success') }}</span>
            </div>
        </div>
    @endif

    <div class="font-[sans-serif] p-4">
        <div class=" max-md:max-w-lg mx-10 mt-4">
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
                                <a href="{{ route('offer.apply', ['id' => $offer->id]) }}"
                                    class="mt-4 inline-block text-blue-600 text-sm hover:underline">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 font-semibold">
                                        <div class="flex gap-3">
                                            <span>
                                                Apply now
                                            </span>

                                            <svg xmlns="http://www.w3.org/2000/svg" width=15 viewBox="0 0 512 512">
                                                <path fill="#ffffff"
                                                    d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                                            </svg>
                                        </div>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-6">
                        <p
                            class="flex items-center p-4 w-1/2  p-4 ml-12 mt-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"">
                            No job offers available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
