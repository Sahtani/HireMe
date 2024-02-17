@extends('layouts.nav')

@section('content')

@include('layouts.stat')
<livewire:delete-jobseeker :all="$all" />

@endsection