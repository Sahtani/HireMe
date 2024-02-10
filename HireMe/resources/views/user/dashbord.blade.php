<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Dashboard') }}
        </h2>
    </x-slot> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="bg-gray-100">
                        <div class="container mx-auto py-8">
                            <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                                <div class="col-span-4 sm:col-span-3">
                                    <div class=" shadow rounded-lg p-6 bg-white ">
                                        <div class="flex flex-col items-center">
                                            {{-- @dump(asset($jobseeker->image)) --}}
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
                                    <div class="bg-white border rounded-lg  border-gray-600 mt-8 p-4 shadow">
                                        <div>
                                            <h2 class="text-xl font-bold mb-4">About Me</h2>
                                            <p class="text-gray-700">{{ $jobseeker->about }} Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed finibus est
                                                vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere
                                                risus non velit egestas
                                                suscipit. Nunc finibus vel ante id euismod. Vestibulum ante ipsum primis
                                                in faucibus orci luctus
                                                et ultrices posuere cubilia Curae; Aliquam erat volutpat. Nulla
                                                vulputate pharetra tellus, in
                                                luctus risus rhoncus id.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bg-white border rounded-lg  border-gray-600 mt-8 shadow">
                                        <div class="p-3">
                                            <div class="">
                                                <div class="flex justify-between flex-wrap">
                                                    <h2 class="text-xl font-bold mt-6 mb-4">Expereince</h2>
                                                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" 
                                                        class="block text-white " type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24"
                                                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                            <path
                                                                d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                                            </path>
                                                            <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        </svg></button>
                                                </div>
                                              
                                            </div>
                                            <div class="mb-6">
                                                <div class="flex justify-between flex-wrap gap-2 w-full">
                                                    <span class="text-gray-700 font-bold">Web Developer</span>
                                                    <p>
                                                        <span class="text-gray-700 mr-2">at ABC Company</span>
                                                        <span class="text-gray-700">2017 - 2019</span>
                                                    </p>
                                                </div>
                                                <p class="mt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est
                                                    vitae
                                                    tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus
                                                    non velit egestas
                                                    suscipit.
                                                </p>
                                            </div>
                                        </div>
                                        

                                    </div>
                                    <div class="bg-white border rounded-lg  border-gray-600 mt-8 shadow">
                                        <div class="p-3">
                                           
                                            
                                            <div>
                                                <div class="">
                                                    <div class="flex justify-between flex-wrap">
                                                        <h2 class="text-xl font-bold mt-6 mb-4">Formation</h2>
                                                        <button data-modal-target="authentication-modal"
                                                            data-modal-toggle="authentication-modal"
                                                            class="block text-white " type="button">
    
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24"
                                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                                <path
                                                                    d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                                                </path>
                                                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                            </svg></button>
                                                    </div>
                                                  
                                                </div>
                                            <div class="mb-6">
                                                
                                                </div>
                                                <div class="flex justify-between flex-wrap gap-2 w-full">
                                                    <span class="text-gray-700 font-bold">Web Developer</span>
                                                    <p>
                                                        <span class="text-gray-700 mr-2">at ABC Company</span>
                                                        <span class="text-gray-700">2017 - 2019</span>
                                                    </p>
                                                </div>
                                                <p class="mt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est
                                                    vitae
                                                    tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus
                                                    non velit egestas
                                                    suscipit.
                                                </p>
                                            </div>
                                        </div>
                                        

                                    </div>

                                    <div class=" bg-white border rounded-lg  border-gray-600 mt-8 shadow">
                                        <div class="p-4">
                                            <div
                                                class=" col-[2_/_span_4] row-span-5 rounded-md max-[768px]:col-span-8 max-[768px]:row-[5_/_span_1]">
                                                <div class="flex justify-between mt-5 mx-4 mb-6">
                                                    <div class="flex gap-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24"
                                                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                            <path
                                                                d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z">
                                                            </path>
                                                        </svg>
                                                        <div class="text-gray-600 font-bold text-xl">
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
                                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                                    <path
                                                                        d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                                                    </path>
                                                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                                </svg></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-4">
                                                    <div>
                                                        <div>
                                                            <h2 class="font-medium text-xl text-black  ">Html 5</h2>
                                                        </div>
                                                    </div>
                                                    <hr class="w-[95%]  h-[1px] border-[#ffffff1f] mx-auto mt-7 mb-7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bg-white border rounded-lg  border-gray-600 mt-8 shadow">
                                        <div class="p-4">
                                            <div
                                                class=" col-[2_/_span_4] row-span-5 rounded-md max-[768px]:col-span-8 max-[768px]:row-[5_/_span_1]">
                                                <div class="flex justify-between mt-5 mx-4 mb-6">
                                                    <div class="flex gap-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24"
                                                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
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
                                                            <button data-modal-target="authentication-modal"
                                                                data-modal-toggle="authentication-modal"
                                                                class="block text-white " type="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                                    <path
                                                                        d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z">
                                                                    </path>
                                                                    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                                </svg></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-4">
                                                    <div>
                                                        <div>
                                                            <h2 class="font-medium text-xl text-black  ">Html 5</h2>
                                                        </div>
                                                    </div>
                                                    <hr class="w-[95%]  h-[1px] border-[#ffffff1f] mx-auto mt-7 mb-7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>

                                <div class="col-span-4 sm:col-span-9 border border-gray-600 mt-8">
                                    <div class="bg-white shadow rounded-lg p-6">

                                        <h3 class="font-semibold text-center mt-3 -mb-2">
                                            Find me on
                                        </h3>
                                        <div class="flex justify-center items-center gap-6 my-6">
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds LinkedIn" href="" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="h-6">
                                                    <path fill="currentColor"
                                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds YouTube" href="" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    class="h-6">
                                                    <path fill="currentColor"
                                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds Facebook" href=""
                                                target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                    class="h-6">
                                                    <path fill="currentColor"
                                                        d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds Instagram" href=""
                                                target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="h-6">
                                                    <path fill="currentColor"
                                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds Twitter" href=""
                                                target="_blank">
                                                <svg class="h-6" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>



                                        <div class="mb-6">
                                            <div class="flex justify-between flex-wrap gap-2 w-full">
                                                <span class="text-gray-700 font-bold">Web Developer</span>
                                                <p>
                                                    <span class="text-gray-700 mr-2">at ABC Company</span>
                                                    <span class="text-gray-700">2017 - 2019</span>
                                                </p>
                                            </div>
                                            <p class="mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est
                                                vitae
                                                tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus
                                                non velit egestas
                                                suscipit.
                                            </p>
                                        </div>
                                        <div class="mb-6">
                                            <div class="flex justify-between flex-wrap gap-2 w-full">
                                                <span class="text-gray-700 font-bold">Web Developer</span>
                                                <p>
                                                    <span class="text-gray-700 mr-2">at ABC Company</span>
                                                    <span class="text-gray-700">2017 - 2019</span>
                                                </p>
                                            </div>
                                            <p class="mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est
                                                vitae
                                                tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus
                                                non velit egestas
                                                suscipit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- {{ ("You're logged in!" ) }}
                    {{ $user->name  }} --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- form skills --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


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
                <form class="space-y-4" action="#">

                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skill name</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required>
                    </div>


                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>

                </form>
            </div>
        </div>
    </div>
</div>
{{-- for experience --}}

  <!-- Main modal -->
  <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form class="p-4 md:p-5" action="{{ route("storeexperience") }}" method="post">
                @csrf
                  <div class="grid gap-4 mb-4 grid-cols-2">
                      <div class="col-span-2">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post</label>
                          <input type="text" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type post name" >
                          <div>
                            @error('title')
                            <p>{{ $message }}</p>
                                
                            @enderror
                          </div>
                        </div>
                     
                      <div class="col-span-2 sm:col-span-1">
                          <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                          <input type="text" name="company" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type company name" >
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Periode</label>
                        <input type="text" name="periode" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type company name">
                    </div>
                      <div class="col-span-2">
                          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Description</label>
                          <textarea  name="desc" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write description here"></textarea>                    
                      </div>
                  </div>
                  <button type="submit" name="" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                      Add new Experience
                  </button>
              </form>
          </div>
      </div>
  </div> 
  
