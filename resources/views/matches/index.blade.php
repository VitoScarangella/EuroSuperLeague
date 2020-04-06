@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.nav', [ 'current' => 'matches.index'])
        <div class="row">
            <div class="col-12 text-right mb-3">
                <a href="{{route('matches.create')}}" class="btn btn-primary">Inserisci partita</a>
            </div>
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Home</th>
                        <th scope="col">Away</th>
                        <th scope="col">Season</th>
                        <th scope="col">Matchday</th>
                        <th scope="col">Home Goals</th>
                        <th scope="col">Away Goals</th>
                        <th scope="col">Home Points</th>
                        <th scope="col">Away Points</th>
                        <th scope="col">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($matches as $match)
                        <tr>
                            <th scope="row">{{$match->id}}</th>
                            <td><a href="{{route('teams.show', $match->home)}}">{{$match->home->name}}</a></td>
                            <td><a href="{{route('teams.show', $match->away)}}">{{$match->away->name}}</a></td>
                            <td>{{$match->season_id}}</td>
                            <td>{{$match->matchday_id}}</td>
                            <td>{{$match->home_goals}}</td>
                            <td>{{$match->away_goals}}</td>
                            <td>{{$match->home_points}}</td>
                            <td>{{$match->away_points}}</td>
                            <td>
                                <form action="{{route('matches.edit', $match)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn-secondary btn">edit</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection