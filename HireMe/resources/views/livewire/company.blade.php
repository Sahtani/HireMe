
<div>
    <div class="flex items-center justify-center mt-8">
        <div class="relative hidden md:block flex items-center justify-center">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search icon</span>
            </div>
            <div class="w-80">
                <input type="text" wire:model.live="search" name="search"
                    class="block w-full py-3 px-10 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:placeholder-gray-400 text-mr focus:!outline-none focus:!border-none focus:!ring-0 focus:!shadow-none"
                    placeholder="Search...">
            </div>

        </div>
    </div>
    <div class=" font-[sans-serif]">
        <div class="max-w-7xl mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-md:max-w-lg mx-auto">
                @if ($companies->isEmpty())
                    <div>
                        <div class="flex items-center p-4 w-full  p-4 ml-12 mt-4 text-xl text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <div>
                                <span class="font-medium">No offers are available at the moment.</span>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($companies as $company)
                        <div
                            class="bg-white cursor-pointer rounded border border-bleu overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                            <div class="relative">
                                <img src="{{ asset('storage/uploads/' . $company->company->image) }}" alt="Blog Post 1"
                                    class="w-full h-96 object-cover" />
                                <div class="absolute inset-0 flex  justify-end">
                                    <div class=" bg-opacity-50  pt-2  pr-2 rounded-lg">
                                        <form action="{{ route('user.subscribe') }}" class="inline-block text-blue-600 text-sm hover:underline" method="POST">
                                           @csrf
                                                <button type="submit"
                                                    class="text-white bg-gray-900 bg-opacity-50 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-blue-600 focus:outline-none dark:focus:ring-blue-800 font-semibold">
                                                    <div class="flex gap-3">
                                                       
                                                        <span>
                                                            Subscribe
                                                        </span>
    
                                                        <svg xmlns="http://www.w3.org/2000/svg" width=15
                                                            viewBox="0 0 512 512">
                                                            <path fill="#ffffff"
                                                                d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                                                        </svg>
                                                    </div>
                                                </button>
                                           
                                        </form>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class=" absolute bottom-0 left-0 right-0 bg-white opacity-90">

                                <div class="p-4">
                                    <div class="flex items-center justify-end ">
                                        <a href="#" class="inline-block  text-sm ">
                                            <button type="button"
                                                class="text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none dark:focus:ring-blue-800">
                                                <div class="flex gap-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        class="w-8 h-8" style="fill:#000066 ;">
                                                        <path
                                                            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                                    </svg>

                                                </div>
                                            </button>
                                        </a>
                                    </div>
                                    <h3 class="text-xl font-bold text-[#333]">{{ $company->name }}</h3>
                                    <div class="text-sm leading-normal my-2 text-gray-800 flex  gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24"
                                            style="fill: rgba(0, 0, 102, 0.45);transform: ;msFilter:;">
                                            <path
                                                d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                                            </path>
                                        </svg>
                                        <span class="mt-0.1">
                                            {{ $company->email }}
                                        </span>
                                    </div>
                                    <div class="flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24"
                                            style="fill: rgba(0, 0, 102, 0.45);transform: ;msFilter:;">
                                            <path
                                                d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z">
                                            </path>
                                        </svg>
                                        <span
                                            class="text-sm block text-gray-800 mb-2">{{ $company->company->phone }}</span>
                                    </div>

                                    <div
                                        class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                                        <p class="text-gray-600 text-sm">{{ $company->company->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

</div>
