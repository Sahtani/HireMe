@extends('layouts.style')

@section('form')
  









<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
                    <form action="{{ url("user/store") }}" class="" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="lg:col-span-2">
                            <div class="grid gap-8 gap-y-4 text-sm grid-cols-1 md:grid-cols-2">
                                <div class="md:col-span-1">
                                    <label for="full_name">Profile Picture</label>
                                    <div>
                                        <label for="uploadFile1" class=" w-full bg-bleuc hover:bg-bg-bleuc text-white text-sm px-4 py-2.5 outline-none rounded text-center mt-2  cursor-pointer  block font-sans-serif">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mr-2 fill-white inline" viewBox="0 0 32 32">
                                                <path d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z" data-original="#000000" />
                                                <path d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z" data-original="#000000" />
                                            </svg>  
                                            Upload
                                            <input type="file" name="image" id="uploadFile1" accept="image/*" class="hidden w-full" value="{{ old('image') }}" enctype="multipart/form-data" />
                                        </label>
                                    </div>
                                  
                                    @error('image')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                               

                                <div class="md:col-span-1">
                                    <label for="email">Job title</label>
                                    <input type="text" name="title" id="title"
                                        class="h-10 border border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('title') }}"
                                        placeholder="Enter you jobr title" />
                                        @error('title')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="md:col-span-1">
                                    <label for="post">Current post</label>
                                    <input type="text" name="post" id="post"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('post') }}"
                                        placeholder="Enter your current post " />
                                        @error('post')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="md:col-span-1">
                                    <label for="industry">industry</label>
                                    <input type="text" name="industry" id="industry"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('industry') }}"
                                        placeholder="Enter your industry" />
                                        @error('industry')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="md:col-span-1">
                                    <label for="address">Address</label>
                                    <input type="text" name="adresse" id="address"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('adresse') }}"
                                        placeholder="Enter your address" />
                                        @error('addresse')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="md:col-span-1">
                                    <label for="phone">Phone number</label>
                                    <input type="text" name="phone" id="phone"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('phone') }}"
                                        placeholder="Enter your phoen number" />
                                        @error('phone')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="md:col-span-2">
                                    <label for="about">About you</label>
                                    <textarea name="about" id="about" class="border mt-1 rounded px-4 w-full bg-gray-50" rows="4"
                                        placeholder="Enter about yourself">{{ old('about') }}</textarea>
                                        @error('about')
                                        <div class="text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="md:col-span-2 text-left w-full">
                                    <div class="inline-flex items-end w-full">
                                        <button
                                            class="bg-bleu hover:bg-bleuc hover:text-white text-bleuc w-full font-bold py-2 px-4 font-serif rounded"
                                            type="submit" name="submit">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</body>

</html>









@endsection
    