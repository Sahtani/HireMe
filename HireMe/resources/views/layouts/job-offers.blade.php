@extends('layouts.nav')

@section('content')
@forelse ($jobOffers as $jobOffer)
<!-- Affichez chaque offre d'emploi ici -->
<div class="w-full bg-white cursor-pointer border border-bleu rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-105 transition-all duration-300">
    <div class="p-6 ">
        <!-- Affichez les détails de l'offre d'emploi -->
        <h3 class="text-xl font-bold text-[#333]">{{ $jobOffer->title }}</h3>
        <!-- Affichez d'autres détails de l'offre d'emploi selon vos besoins -->
    </div>
</div>
@empty
<!-- Affichez un message si aucune offre d'emploi n'est disponible -->
<div class="p-6">
    <p class="flex items-center p-4 w-1/2  p-4 ml-12 mt-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400">
        No job offers available.
    </p>
</div>
@endforelse

@endsection