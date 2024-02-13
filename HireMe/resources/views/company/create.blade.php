@extends('layouts.style')

@section('form')
<div class="flex items-center justify-center m-auto mt-10">
        <!-- COMPONENT CODE -->
        <div class=" p-6  flex items-center justify-center w-1/2">

            <div class="w-full p-8 bg-white my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl ">
                <form action="{{ route('company.store') }}" class="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">

                        <div>
                            <label for="uploadFile1"
                                class=" w-full bg-bleuc hover:bg-bg-bleuc text-white text-sm px-4 py-2.5 outline-none rounded text-center mt-2  cursor-pointer  block font-sans-serif">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mr-2 fill-white inline"
                                    viewBox="0 0 32 32">
                                    <path
                                        d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                                        data-original="#000000" />
                                    <path
                                        d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                                        data-original="#000000" />
                                </svg>
                                Upload
                                <input type="file" name="image" id="uploadFile1" accept="image/*" class="hidden w-full"
                                    value="{{ old('image') }}" enctype="multipart/form-data" />
                                   
                            </label>
                            <div>
                              @error('image')
                              <div class="text-sm text-red-500">{{ $message }}</div>
                          @enderror
                            </div>
                        </div>
                       
                        <div>
                            <input name="slogan" value="{{ old('slogan') }}"
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg   focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Slogan*" />
                            @error('slogan')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input name="industry" value="{{ old('industry') }}"
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Industry*" />
                            @error('industry')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                        <div>
                            <input name="phone" value="{{ old('phone') }}"
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Phone*" />
                            @error('phone')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>



                    </div>
                    <div class="my-4">
                        <textarea placeholder="Description*" value="" name="description"
                            class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button type="submit" name="submit"
                            class="text-sm font-bold tracking-wide bg-blue-900 text-white p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                            Create your profile
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>
