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
                {{-- <form id="searchForm"> --}}
                <input type="text" wire:model.live="search" name="search"
                    class="block w-full py-3 px-10 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:placeholder-gray-400 text-mr focus:!outline-none focus:!border-none focus:!ring-0 focus:!shadow-none"
                    placeholder="Search...">
                {{-- </form> --}}
    
            </div>
    
        </div>
    </div>
    <div class=" font-[sans-serif]">
        <div class="max-w-7xl mx-auto">
           
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-md:max-w-lg mx-auto">

                @foreach ($companies as $company)
                    <div
                        class="bg-white cursor-pointer rounded border border-bleu overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                        <img src="{{ asset('storage/uploads/' . $company->company->image) }}" alt="Blog Post 1"
                            class="w-full h-96 object-cover" />
                        <div class="p-6 absolute bottom-0 left-0 right-0 bg-white opacity-90">

                            <h3 class="text-xl font-bold text-[#333]">{{ $company->name }}</h3>
                            <div class="text-sm leading-normal my-2 text-gray-800 flex  gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 102, 0.45);transform: ;msFilter:;">
                                <path
                                    d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z">
                                </path>
                            </svg>
                            <span class="text-sm block text-gray-800 mb-2">{{ $company->company->phone }}</span>
                          </div>
                           
                            <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                                <p class="text-gray-600 text-sm">{{ $company->company->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

</div>
