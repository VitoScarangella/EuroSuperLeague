<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use Illuminate\Http\Request;

class MatchController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $matches = Match::all();

        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $teams = Team::all();

        return view('matches.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $match = Match::create($request->all());

        return redirect(route('matches.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match) {
        $teams = Team::all();

        return view('matches.edit', compact('match', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Match $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match) {
        $home_goals = $request->home_goals;
        $away_goals = $request->away_goals;
        $match->update([
            'played'              => 1,
            'home_id'             => $request->home_id,
            'away_id'             => $request->away_id,
            'home_goals'          => $home_goals,
            'away_goals'          => $away_goals,
            'home_goals_suffered' => $away_goals,
            'away_goals_suffered' => $home_goals,
        ]);

        $match->home_points = $this->calculateHomePoints($match);
        $match->away_points = $this->calculateAwayPoints($match);
        $match->save();

        $match->home->updatePoints($this->calculateHomePoints($match));
        $match->away->updatePoints($this->calculateAwayPoints($match));


        return redirect(route('matches.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match) {
        //
    }

    private function calculateHomePoints($match) {
        if ($match->home_goals === $match->away_goals)
        {
            return 1;
        } elseif ($match->home_goals > $match->away_goals)
        {
            return 3;
        }

        return 0;
    }

    private function calculateAwayPoints($match) {
        if ($match->away_goals === $match->home_goals)
        {
            return 1;
        } elseif ($match->away_goals > $match->home_goals)
        {
            return 3;
        }

        return 0;
    }


    public function retrieveMatches(Request $request) {
        $matchday_id = $request->get('matchday_id');
        $matches = Match::where('matchday_id', $matchday_id)->with(['home', 'away'])->get();

        return $matches;
    }


}
