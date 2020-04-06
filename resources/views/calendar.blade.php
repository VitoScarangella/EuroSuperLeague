@extends('layouts.app')

@section('content')
    <div class="container fixtures-page">
        @include('partials.nav', [ 'current' => 'calendar'])
        <calendar :matchday_id_prop="{{$matchday_id}}" inline-template>
            <div>
                <div class="row">
                    <div class="col-1 text-left">
                        <button class="btn btn-light" @click="previousMatch"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-1 text-right">
                        <button class="btn btn-light" @click="nextMatch"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="text-center image-container p-0">
                    <img src="/images/logo.png" class="w-100" alt="">
                </div>
                <div class="col-12 text-center">
                    <h2>Giornata @{{ matchday_id }}</h2>
                </div>
                <div class="row shadow-sm mb-2 match-row" v-for="match in matches">
                    <div class="w-75 m-auto">
                        <div class="row d-flex align-items-center">
                            <div class="col-1">
                                <img class="home-logo w-100 logo" :src=`/images/teams/${match.home.name}.png` alt="">
                            </div>
                            <div class="col-4 d-flex justify-content-between">
                                <span class="home-team team text-uppercase">@{{ match.home.name }}</span>
                                <span class="home-result result">@{{ match.home_goals }}</span>
                            </div>
                            <div class="col-2 text-center" v-if="match.played">
                                V
                            </div>
                            <div class="col-2 text-center" v-else>
                                <a :href="match.youtube_url">Guarda</a>
                            </div>
                            <div class="col-4 d-flex justify-content-between">
                                <span class="away-result result">@{{ match.away_goals }}</span>
                                <span class="away-team team text-uppercase w-100">@{{ match.away.name }}</span>
                            </div>
                            <div class="col-1 text-right">
                                <img class="away-logo w-100 logo" :src=`/images/teams/${match.away.name}.png` alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </calendar>
    </div>
@endsection
