@extends('layouts.nav')

@section('content')

@include('layouts.stat')
<livewire:delete-company :all_companies="$all_companies" />
@endsection