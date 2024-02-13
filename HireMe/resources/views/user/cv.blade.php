<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <link rel="stylesheet" href="{{ asset('css/cv.css') }}">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <header>
            <img src=" {{ asset('storage/uploads/' . $jobseeker->image) }}"
            class="w-20 h-20 bg-gray-300 rounded mb-4 shrink-0">
        </img>
            <h1>{{ $user->name }}</h1>
            <p>{{ $jobseeker->title }}</p>
            {{ $jobseeker->post }}
        </header>
        <a href="{{ url('home/download') }}" class="btn btn-primary">Télécharger le CV</a>

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
       
      
        <div class="bg-white border rounded-lg  border-gray-600 mt-8 p-4 shadow">
            <div>
                <h2 class="text-xl font-bold mb-4">About Me</h2>
                <p class="text-gray-700">{{ $jobseeker->about }} 
                </p>
            </div>
        </div>
        <hr>
        {{-- <div class="section">
            <h2>Experience</h2>
            @foreach ($exs as $ex )
            <div class="subsection">
                <h3>{{ $ex->title }}</h3>
                <p>{{ $ex->company }} Company</p>
                <p>{{ \Carbon\Carbon::parse($ex->start_date)->format('Y') }} - {{ \Carbon\Carbon::parse($ex->end_date)->format('Y') }}</p>
                <ul>
                    <li>{{ $ex->desc }}</li>
                </ul>
                @endforeach
            </div>
        </div> --}}
        {{-- <div class="section">
            <h2>Education</h2>
            @foreach ($cursus as $cur )
            <div class="subsection">
                <h3>{{ $cur->diplome }}</h3>
                <p>at {{ $cur->etablissement }}</p>
                <p>{{ \Carbon\Carbon::parse($ex->start_date)->format('Y') }} - {{ \Carbon\Carbon::parse($ex->end_date)->format('Y') }}</p>
            </div>
            @endforeach
        </div> --}}
        {{-- <div class="section">
            <h2>Skills</h2>
            @foreach ($skills as $skill )
            <ul>
                <li>{{ $skill->name }}</li>
            </ul>
            @endforeach
        </div> --}}
        <footer>
            <p>Contact:  <div class="flex gap-1">
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
        </footer>
    </div>
</body>
</html>
