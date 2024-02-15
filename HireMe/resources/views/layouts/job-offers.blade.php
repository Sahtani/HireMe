@extends('layouts.nav')

@section('content')
@if ($jobOffers->isEmpty())
    <p>Aucune offre d'emploi correspondant à "{{ $search }}"</p>
@else
    <p>Résultats de recherche pour "{{ $search }}" :</p>
    @foreach ($jobOffers as $jobOffer)
        <h2>{{ $jobOffer->title }}</h2>
        <p>{{ $jobOffer->desc }}</p>
        <!-- Affichez d'autres détails de l'offre d'emploi selon vos besoins -->
    @endforeach
@endif

@endsection