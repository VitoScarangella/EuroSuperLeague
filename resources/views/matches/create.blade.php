@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.nav', [ 'current' => 'matches.create'])
        <form action="{{route('matches.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="season">Stagione</label>
                    <select name="season_id" id="season_id" class="form-control">
                        @for($i = 1; $i <= 2; $i++)
                            <option value="{{$i}}">
                                {{$i}}
                            </option>
                        @endfor
                    </select>
                </div>
                <div class="col-6">
                    <label for="matchday">Giornata</label>
                    <select name="matchday_id" id="matchday_id" class="form-control">
                        @for($i = 1; $i <= 38; $i++)
                            <option value="{{$i}}">
                                {{$i}}
                            </option>
                        @endfor
                    </select>
                </div>
                <div class="col-6">
                    <label for="home_id">In casa</label>
                    <select name="home_id" id="home_id" class="form-control">
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">
                                {{$team->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="away_id">In casa</label>
                    <select name="away_id" id="away_id" class="form-control">
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">
                                {{$team->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 mt-4 text-right">
                    <button type="submit" class="btn btn-primary">Salva</button>
                </div>
            </div>
        </form>
    </div>
@endsection