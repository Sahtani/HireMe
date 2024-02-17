@extends('layouts.nav')

@section('content')

@include('layouts.stat')
<livewire:delete-offer :all_offers="$all_offers"/>
@endsection