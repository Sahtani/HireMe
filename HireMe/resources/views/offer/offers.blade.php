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
                    <span class="font-medium"></span>
                </div>
            </div>
            {{-- @extends('layouts.alert')

    @section('alert')
    {{ session('error') }}
    @endsection --}}
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
        <livewire:job-offer/>
    @endsection
    {{-- <div id="searchResults" class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
       
    </div> --}}

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchForm').keyup(function (){
                var searchValue = $('#search').val().trim();
                console.log(searchValue);
                if (searchValue !== '') {
                    var formData = $(this).serialize(); 
                    $.ajax({
                        url: '{{ route("offer.search") }}',
                        type: 'GET',
                        data: formData, 
                        success: function(response) {
                            $('#grid').hide();
                            $('#searchResults').html(response).show();
                        }
                    });
                } else { 
                    $('#searchResults').hide();
                }
            });
        });
    </script> --}}
