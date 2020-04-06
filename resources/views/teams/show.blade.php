@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{$team->name}}: {{$team->totalPoints()}}</h1>
        </div>
    </div>
@endsection
