<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="  flex items-center justify-center overflow-hidden" style="background: #edf2f7;">
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Responsive Form</h2>
                <p class="text-gray-500 mb-6">Form is mobile responsive. Give it a try.</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
                        <form action="{{ url("home/store") }}" class="" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="lg:col-span-2">
                                <div class="grid gap-8 gap-y-4 text-sm grid-cols-1 md:grid-cols-2">
                                    <div class="md:col-span-1">
                                        <label for="full_name">profile picture</label>
                                        <input type="file" name="image" accept="image/*"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('image') }}" enctype="multipart/form-data" />
                                            @error('image')
                                            <div class="text-sm text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                   

                                    <div class="md:col-span-1">
                                        <label for="email">Job title</label>
                                        <input type="text" name="title" id="title"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('title') }}"
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
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('address') }}"
                                            placeholder="Enter your address" />
                                            @error('address')
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

                                    {{-- <div class="md:col-span-2">
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="" />
                                    </div> --}}


                                    <div class="md:col-span-1 text-left">
                                        <div class="inline-flex items-end">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
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
