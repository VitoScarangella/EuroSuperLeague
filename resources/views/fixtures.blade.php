@extends('layouts.app')
@section('content')
    <div class="container fixtures-page">
        @include('partials.nav', [ 'current' => 'fixtures'])
        <div class="row text-center mb-4">
            <h3 class="text-uppercase w-100">Giornata 5 • Stagione 1</h3>
        </div>
        @foreach($fixtures as $fixture)
            <div class="row shadow-sm mb-2 match-row">
                <div class="w-75 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-1">
                            <img class="home-logo w-100 logo" src="/images/teams/{{$fixture->home->name}}.png" alt="">
                        </div>
                        <div class="col-4 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">{{$fixture->home->name}}</span>
                            <span class="home-result result">{{$fixture->home_goals}}</span>
                        </div>
                        <div class="col-2 text-center">
                            {{--<a href="{{$fixture->youtube_url}}" target="_blank" class="text-danger">YouTube</a>--}}
                            V
                        </div>
                        <div class="col-4 d-flex justify-content-between">
                            <span class="away-result result">{{$fixture->away_goals}}</span>
                            <span class="away-team team text-uppercase w-100">{{$fixture->away->name}}</span>
                        </div>
                        <div class="col-1 text-right">
                            <img class="away-logo w-100 logo" src="/images/teams/{{$fixture->away->name}}.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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

