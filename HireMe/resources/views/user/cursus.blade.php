@extends('layouts.style')

@section('form')
    <section class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-full ">

            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 py-6  px-2 md:px-10 mx-auto w-full">
                <a href="{{ route('user.show') }}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 102, 1);transform: ;msFilter:;">
                            <path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z">
                            </path>
                        </svg>
                    </div>
                </a>
                <form action="{{ url('home/storecursus') }}" method="POST" class="mt-2 w-full">
                    @csrf
                    <div class="grid gap-3 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diplome</label>
                            <input type="text" name="diplome" id="name" value="{{ old('diplome') }}"
                                class="bg-gray-50 border border-bleu text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                placeholder="Type diplome name">
                            <div>
                                @error('diplome')
                                    <p class="text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                        </div>
                        <div class="sm:col-span-2">
                            <label for="brand"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etablissment</label>
                            <input type="text" name="etablissement" value="{{ old('etablissement') }}" id="brand"
                                class="bg-gray-50 border border-bleu text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                                placeholder=" Etablissement">
                            <div>
                                @error('etablissement')
                                    <p class="text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                        </div>
                        <div class="w-full">
                            <label for="start" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                date</label>
                            <input type="date" name="start_date" id="start" value="{{ old('start_date') }}"
                                class="bg-gray-50 border border-bleu text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                                placeholder="">
                            <div>
                                @error('start_date')
                                    <p class="text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                        </div>
                        <div class="w-full">
                            <label for="end" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                                date
                            </label>
                            <input type="date" name="end_date" id="end" value="{{ old('end_date') }}"
                                class="bg-gray-50 border border-bleu text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                placeholder="">
                            <div>
                                @error('end_date')
                                    <p class="text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <button type="submit"
                        class=" w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white  bg-bleuc rounded-lg">
                        Add Formation
                    </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
@endsection
