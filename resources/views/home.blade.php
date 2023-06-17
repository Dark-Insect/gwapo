@extends('layouts.admin')

@section('content-header', 'Dashboard')

@section('content')
    
<div class="card">
    <div class="card-body">
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ asset('images/gwapo.jpg') }}" class="img-rounded" alt="Cinque Terre" width="635" height="403">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

</div>



@endsection
