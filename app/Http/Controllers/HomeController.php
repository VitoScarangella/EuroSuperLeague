<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ranking()
    {
        $teams = DB::table('rankings')
            ->orderBy('points', 'desc')
            ->get();
        $current_matchday = Match::where('played', true)->max('matchday_id');
        return view('ranking', ['teams' => $teams, 'matchday_id' => $current_matchday]);
    }

    public function calendar()
    {
        $current_matchday = Match::where('played', true)->max('matchday_id');
        return view('calendar', ['matchday_id' => $current_matchday]);
    }

    public function statistics()
    {
        return view('statistics');
    }
    
    public function fixtures(){
        $fixtures = Match::where('matchday_id', 5)->get();
        return view('fixtures', compact('fixtures'));
    }
    public function next_match(){
        $next_matches = Match::where('matchday_id', 5)->get();
        return view('next_matches', compact('next_matches'));
    }


}
