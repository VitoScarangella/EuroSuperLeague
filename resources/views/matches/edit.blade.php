@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.nav', [ 'current' => 'matches.edit'])
        <form action="{{route('matches.update', $match)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Match id {{$match->id}}</h2>
                </div>
                <div class="col-1">
                    <label for="season_id">Stagione</label>
                    <select name="season_id" id="season_id" class="form-control">
                        @for($i = 1; $i <= 2; $i++)
                            <option value="{{$i}}" @if($match->season_id === $i) selected @endif>
                                {{$i}}
                            </option>
                        @endfor
                    </select>
                </div>
                <div class="col-1">
                    <label for="matchday_id">Giornata</label>
                    <select name="matchday_id" id="matchday_id" class="form-control">
                        @for($i = 1; $i <= 38; $i++)
                            <option value="{{$i}}" @if($match->matchday_id === $i) selected @endif>
                                {{$i}}
                            </option>
                        @endfor
                    </select>
                </div>
                <div class="col-3">
                    <label for="home_id">Home</label>
                    <select name="home_id" id="home_id" class="form-control">
                        @foreach($teams ?? '' as $team)
                            <option value="{{$team->id}}" @if($match->home->id === $team->id) selected @endif>
                                {{$team->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label for="away_id">Away</label>
                    <select name="away_id" id="away_id" class="form-control">
                        @foreach($teams ?? '' as $team)
                            <option value="{{$team->id}}" @if($match->away->id === $team->id) selected @endif>
                                {{$team->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <label for="">Home goals</label>
                    <input id="home_goals" type="number" class="form-control" name=home_goals @if($match->home_goals || $match->home_goals === 0) value="{{$match->home_goals}}" @endif>
                </div>
                <div class="col-2">
                    <label for="">Away goals</label>
                    <input id="away_goals" type="number" class="form-control" name=away_goals @if($match->away_goals || $match->away_goals === 0) value="{{$match->away_goals}}" @endif>
                </div>
                <div class="col-12 mt-4 text-right">
                    <button type="submit" class="btn btn-primary">Salva</button>
                </div>
            </div>
        </form>

    </div>
@endsection