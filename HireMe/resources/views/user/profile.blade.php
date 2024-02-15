{{-- <x-app-layout> --}}
@extends('layouts.nav')

@section('content')
    <div class=" bg-verblanc">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="">
                        <div class="container mx-auto py-8">
                            <div class="px-4 w-full">
                                <div class="w-full">
                                    <div class=" shadow rounded-lg p-6 bg-white ">
                                        <div class="flex flex-col items-center">
                                            <img src=" {{ asset('storage/uploads/' . $jobseeker->image) }}"
                                                class="w-20 h-20 bg-gray-300 rounded mb-4 shrink-0">
                                            </img>
                                            <h1 class="text-xl font-bold">{{ $user->name }}</h1>
                                            <p class="text-gray-700">{{ $jobseeker->title }}</p>
                                            <p class="text-gray-700">{{ $jobseeker->post }}</p>
                                            <div class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M12 22s8.029-5.56 8-12c0-4.411-3.589-8-8-8S4 5.589 4 9.995C3.971 16.44 11.696 21.784 12 22zM8 9h3V6h2v3h3v2h-3v3h-2v-3H8V9z">
                                                    </path>
                                                </svg>
                                                <p class="text-gray-700">{{ $jobseeker->adresse }}</p>
                                            </div>
                                        </div>
                                        <a href="{{ route('user.showcv') }}"> view cv</a><br>
                                        <a href="{{ route('user.download') }}"> download cv</a>
                                        <div class="mt-6 flex flex-col gap-4 ">
                                            <h1 class="text-xl font-bold">Contact</h1>
                                            <div class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                                                    </path>
                                                </svg>
                                                <p>{{ $user->email }}</p>
                                            </div>
                                            <div class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z">
                                                    </path>
                                                </svg>
                                                <p>{{ $jobseeker->phone }}</p>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="bg-white border rounded-lg  border-bleu mt-8 p-4 shadow">
                                        <div>
                                            <h2 class="text-xl font-bold mb-4">About Me</h2>
                                            <p class="text-gray-700 ">{{ $jobseeker->about }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bg-white border rounded-lg  border-bleu mt-8 shadow">
                                        <div class="p-3">
                                            <div class="">
                                                <div class="flex justify-between flex-wrap">
                                                    <h2 class="text-xl font-bold mt-6 mb-4">Expereince</h2>
                                                    <a href="{{ route('user.createexperience') }}"
                                                        class="block text-white " type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24"
                                                            style="fill: #000066;transform: ;msFilter:;">
                                                            <path
                                                                d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                                            </path>
                                                            <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        </svg></a>
                                                </div>

                                            </div>
                                            <div class="mb-6">
                                                @foreach ($exs as $ex)
                                                    <div class="flex justify-between flex-wrap gap-2 w-full">
                                                        <span class="text-gray-700 font-bold">{{ $ex->title }}</span>
                                                        <p>
                                                            <span class="text-gray-700 mr-2">at {{ $ex->company }}</span>
                                                            <span
                                                                class="text-gray-700">{{ \Carbon\Carbon::parse($ex->start_date)->format('Y') }}
                                                                -
                                                                {{ \Carbon\Carbon::parse($ex->end_date)->format('Y') }}</span>
                                                        </p>
                                                    </div>
                                                    <p class="mt-2">
                                                        {{ $ex->desc }}
                                                    </p>
                                                @endforeach

                                            </div>
                                        </div>


                                    </div>
                                    <div class="bg-white border rounded-lg  border-bleu mt-8 shadow">
                                        <div class="p-3">
                                            <div>
                                                <div class="">
                                                    <div class="flex justify-between flex-wrap">
                                                        <h2 class="text-xl font-bold mt-6 mb-4">Formation</h2>
                                                        <a href="{{ route('user.createcursus') }}">
                                                            <button class="block text-white " type="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    style="fill: #000066;transform: ;msFilter:;">
                                                                    <path
                                                                        d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                                                    </path>
                                                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                                </svg></button>
                                                        </a>

                                                    </div>

                                                </div>
                                                @foreach ($cursus as $cur)
                                                    <div class="flex justify-between flex-wrap gap-2 w-full">
                                                        <span class="text-gray-700 font-bold">{{ $cur->diplome }}</span>
                                                        <p>
                                                            <span class="text-gray-700 mr-2">at
                                                                {{ $cur->etablissement }}</span>
                                                            <span
                                                                class="text-gray-700">{{ \Carbon\Carbon::parse($ex->start_date)->format('Y') }}
                                                                -
                                                                {{ \Carbon\Carbon::parse($ex->end_date)->format('Y') }}</span>
                                                        </p>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>


                                    </div>

                                    <div class=" bg-white border rounded-lg  border-bleu mt-8 shadow">
                                        <div class="p-4">
                                            <div
                                                class=" col-[2_/_span_4] row-span-5 rounded-md max-[768px]:col-span-8 max-[768px]:row-[5_/_span_1]">
                                                <div class="flex justify-between mt-5 mx-4 mb-6">
                                                    <div class="flex gap-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24"
                                                            style="fill: #000066;transform: ;msFilter:;">
                                                            <path
                                                                d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z">
                                                            </path>
                                                        </svg>
                                                        <div class="text-gray-600 font-semibold text-xl">
                                                            <h2 class="">Skills</h2>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="flex items-center">
                                                            <button data-modal-target="authentication-modal"
                                                                data-modal-toggle="authentication-modal"
                                                                class="block text-white " type="button">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    style="fill: #000066;transform: ;msFilter:;">
                                                                    <path
                                                                        d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                                                    </path>
                                                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                                </svg></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach ($skills as $skill)
                                                    <div class="ml-4">
                                                        <div>
                                                            <div>
                                                                <h2 class="font-medium text-xl text-black  ">
                                                                    {{ $skill->name }}</h2>
                                                            </div>
                                                        </div>
                                                        <hr class="w-[95%]  h-[1px] border-[#ffffff1f] mx-auto mt-3">
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bg-white border rounded-lg  border-bleu mt-8 shadow">
                                        <div class="p-4">
                                            <div
                                                class=" col-[2_/_span_4] row-span-5 rounded-md max-[768px]:col-span-8 max-[768px]:row-[5_/_span_1]">
                                                <div class="flex justify-between mt-5 mx-4 mb-6">
                                                    <div class="flex gap-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24"
                                                            style="fill: #000066;transform: ;msFilter:;">
                                                            <path
                                                                d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z">
                                                            </path>
                                                        </svg>
                                                        <div class="text-gray-600 font-bold text-xl">
                                                            <h2 class="">Languages</h2>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="flex items-center">
                                                            <a href="{{ route('user.createlangue') }}">
                                                                <button class="block text-white " type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        style="fill:#000066;transform: ;msFilter:;">
                                                                        <path
                                                                            d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                                                        </path>
                                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                                    </svg></button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach ($langues as $langue)
                                                    <div class="ml-4">
                                                        <div>
                                                            <div>
                                                                <h2 class="font-medium text-xl text-black  ">
                                                                    {{ $langue->name }}</h2>
                                                                <p class="text-sm text-gra-400">{{ $langue->level }}</p>
                                                            </div>
                                                        </div>
                                                        <hr class="w-[95%]  h-[1px] border-[#ffffff1f] mx-auto mt-7 mb-7">
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- form skills --}}




    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Sign in to our platform
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('user.storeskill') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skill name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="">
                            <div>
                                @error('name')
                                    <p class="text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>   
    {{-- @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#authentication-modal').show('show');
            });
        </script>
    @endif --}}




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
