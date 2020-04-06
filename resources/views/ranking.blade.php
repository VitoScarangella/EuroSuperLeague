@extends('layouts.app')

@section('content')
    <div class="container ranking-page">
        @include('partials.nav', [ 'current' => 'ranking'])
        <div class="container mt-5">
            <div class="row text-center mb-4">
                <h3 class="text-uppercase w-100 text-center w-100">Classifica</h3>
                <h5 class="text-uppercase w-100 text-center w-100">Giornata {{$matchday_id}}</h5>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-75 m-auto">
                    <div class="row d-flex align-items-center">
                        @foreach($teams as $team)
                            @if($loop->index <= 10)
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-2">
                                            <img class="home-logo w-100 logo"
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
                                </div>
                            @endif
                        @endforeach
                        @foreach($teams as $team)
                            @if($loop->index >= 11 || $loop->index < 20)
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-2">
                                            <img class="home-logo w-100 logo"
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
                                </div>
                            @endif
                        @endforeach

                        {{--@foreach($teams as $team)
                            @if($loop->index > 11 && $loop->index < 20)
                                <div class="col-1">
                                    <img class="home-logo w-100 logo" src="/images/teams/{{\App\Team::find($team->team_id)->name}}.png" alt="">
                                </div>
                                <div class="col-4 d-flex justify-content-between my-4">
                                    <span class="home-team team text-uppercase">{{\App\Team::find($team->team_id)->name}}</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="points">{{$team->points}}</span>
                                </div>
                            @endif
                        @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
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

