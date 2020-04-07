@extends('layouts.app')

@section('content')
    <div class="container ranking-page">
        @include('partials.nav', [ 'current' => 'ranking'])
        <div class="container mt-5">
            <div class="row text-center mb-4">
                <h3 class="text-uppercase w-100 text-center w-100">Classifica</h3>
                <h5 class="text-uppercase w-100 text-center w-100">Giornata {{$matchday_id}}</h5>
            </div>
            <div class="row">
                <div class="w-75 m-auto">
                    <div class="row">
                        <div class="col-6">
                            @foreach($first_ten_teams as $team)
                                <div class="row ranking-row shadow-sm mb-2  d-flex align-items-center">
                                    <div class="col-2">
                                        <img class="home-logo w-50 logo"
                                             src="/images/teams/{{\App\Team::find($team->team_id)->name}}.png"
                                             alt="">
                                    </div>
                                    <div class="col-8 d-flex justify-content-between ">
                                        <span class="home-team team text-uppercase">{{\App\Team::find($team->team_id)->name}}</span>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="points">{{$team->points}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-6">
                            @foreach($second_ten_teams as $team)
                                <div class="row ranking-row shadow-sm mb-2  d-flex align-items-center">
                                    <div class="col-2">
                                        <img class="home-logo w-50 logo"
                                             src="/images/teams/{{\App\Team::find($team->team_id)->name}}.png"
                                             alt="">
                                    </div>
                                    <div class="col-8 d-flex justify-content-between ">
                                        <span class="home-team team text-uppercase">{{\App\Team::find($team->team_id)->name}}</span>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="points">{{$team->points}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

