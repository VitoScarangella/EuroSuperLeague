@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.nav', [ 'current' => 'home'])
        <a href="{{route('matches.create')}}" class="btn btn-primary">Inserisci partita</a>
        <a href="{{route('matches.index')}}" class="btn btn-primary">Partite giocate</a>
    </div>
@endsection
