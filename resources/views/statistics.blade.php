@extends('layouts.app')

@section('content')
    <div class="container statistics-page">
        @include('partials.nav', [ 'current' => 'statistics'])
        <div class="container mt-5">
            <div class="row text-center mb-4">
                <h3 class="text-uppercase w-100 text-center w-100">Classifica Marcatori</h3>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="">Posizione</span>
                        </div>
                        <div class="col-2 text-center text-uppercase">
                            <span class="">Squadra</span>
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Giocatore</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class=""># Goals</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">1</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Borussia%20Dortmund.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Haaland</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">2</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Juventus.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Cristiano Ronaldo</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">3</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Real%20Madrid.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Benzema</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">4</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Tottenham.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Kane</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">5</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Arsenal.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Lacazette</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">6</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Arsenal.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Pèpè</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">7</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Bayern%20Monaco.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Lewandowski</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">8</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Eintracht%20Francoforte.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Dost</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">9</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Inter.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Lukaku</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">10</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Liverpool.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Firmino</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">11</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Liverpool.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Salah</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">12</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Manchester%20City.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Aguero</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">13</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Manchester%20United.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Bruno Fernandes</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">14</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Napoli.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Milik</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">15</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/OL.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Dembèlè</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">16</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/PSG.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Icardi</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">17</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Real%20Madrid.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Bale</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">18</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Roma.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Dzeko</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">19</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Valencia.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Gomez</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">2</span>
                        </div>
                    </div>
                </div>
            </div> <div class="row shadow-sm mb-2 ranking-row">
                <div class="w-50 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 text-center text-uppercase">
                            <span class="position">20</span>
                        </div>
                        <div class="col-2 text-center">
                            <img class="home-logo w-25 logo" src="/images/teams/Arsenal.png" alt="">
                        </div>
                        <div class="col-6 d-flex justify-content-between">
                            <span class="home-team team text-uppercase">Aubameyang</span>
                        </div>
                        <div class="col-2 text-center">
                            <span class="goals">1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
