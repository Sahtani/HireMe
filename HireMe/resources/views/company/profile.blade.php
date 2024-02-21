@extends('layouts.nav')

@section('content')
    <main class="profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
          ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                    version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-200">
            <div class="container flex mx-auto px-4 items-center justify-center ">
                <div class=" flex flex-col min-w-0 break-words bg-white w-1/2 mb-6 shadow-xl items-center justify-center  rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center mb-20">
                            <div class="w-full lg:w-3/12 px-4 pb-10 lg:order-2 flex justify-center">
                                <div class=" ">
                                    <img alt="..."
                                        src="{{ asset('storage/uploads/' . $company->image) }}"
                                        class="shadow-xl rounded-lg h-auto align-middle border-none  -m-20 -ml-20 lg:-ml-16 max-w-200-px">
                                </div>
                            </div>

                        </div>
                        <div class="text-center mt-20">
                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 pt-6">
                                {{ $user->name }}
                            </h3>
                            <div
                                class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold flex items-center justify-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 102, 0.45);transform: ;msFilter:;">
                                    <path
                                        d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                                    </path>
                                </svg>
                                {{ $user->email }}
                            </div>
                            <div class="mb-2 text-blueGray-600 mt-6">
                                <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i> 
                               {{ $company->slogan }}
                            </div>
                            <div class="mb-2 text-blueGray-600">
                                <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>{{$company->industry}}
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                       {{$company->description}}
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
