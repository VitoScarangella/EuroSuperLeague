@extends('layouts.app')
@section('content')
    <div class="container fixtures-page">
        @include('partials.nav', [ 'current' => 'next_match'])
        <div class="row text-center mb-4">
            <h4 class="w-100">EURO SUPER LEAGUE</h4>
            <h3 class="text-uppercase w-100">Stagione 1 - Giornata 5</h3>
        </div>
        @foreach($next_matches as $next_match)
            <div class="row shadow-sm mb-2 match-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-1">
                            <img class="home-logo w-100 logo" src="/images/teams/{{$next_match->home->name}}.png" alt="">
                        </div>
                        <div class="col-4 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">{{$next_match->home->name}}</span>
                            <span class="home-result result">{{$next_match->home_goals}}</span>
                        </div>
                        <div class="col-2 text-center">
                            {{--<a href="{{$next_match->youtube_url}}" target="_blank" class="text-danger">YouTube</a>--}}
                            V
                        </div>
                        <div class="col-4 d-flex justify-content-between">
                            <span class="away-result result">{{$next_match->away_goals}}</span>
                            <span class="away-team team text-uppercase w-100">{{$next_match->away->name}}</span>
                        </div>
                        <div class="col-1 text-right">
                            <img class="away-logo w-100 logo" src="/images/teams/{{$next_match->away->name}}.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @include('partials.ranking')
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            console.log('ciao');
            $('#ranking').DataTable();
        });
    </script>
@endsection

