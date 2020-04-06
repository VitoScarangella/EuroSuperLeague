<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model {

    protected $table = 'teams';
    protected $guarded = [];

    public function homeMatches() {
        return $this->hasMany(Match::class, 'id', 'home_id');
    }

    public function awayMatches() {
        return $this->hasMany(Match::class, 'id', 'away_id');
    }

    public function homePoints() {
        $matches = Match::where('home_id', $this->id)->get();
        $home_points = 0;
        foreach ($matches as $match)
        {
            $home_points += $match->homa_points;
        }

        return $home_points;
    }

    public function awayPoints() {
        $matches = Match::where('away_id', $this->id)->get();
        $away_points = 0;
        foreach ($matches as $match)
        {
            $away_points += $match->away_points;
        }

        return $away_points;
    }

    public function homeGoalsSuffered() {
        $matches = Match::where('home_id', $this->id)->get();
        $home_goal_suffered = 0;
        foreach ($matches as $match)
        {
            $home_goal_suffered += $match->homa_goals_suffered;
        }

        return $home_goal_suffered;
    }

    public function awayGoalsSuffered() {
        $matches = Match::where('away_id', $this->id)->get();
        $away_goal_suffered = 0;
        foreach ($matches as $match)
        {
            $away_goal_suffered += $match->away_goals_suffered;
        }

        return $away_goal_suffered;
    }

    public function homeGoalsDone() {
        $matches = Match::where('home_id', $this->id)->get();
        $home_goals_done = 0;
        foreach ($matches as $match)
        {
            $home_goals_done += $match->homa_goals;
        }

        return $home_goals_done;
    }

    public function awayGoalsDone() {
        $matches = Match::where('away_id', $this->id)->get();
        $away_goals_done = 0;
        foreach ($matches as $match)
        {
            $away_goals_done += $match->away_goals;
        }

        return $away_goals_done;
    }

    public function goalsDone() {
        return $this->homeGoalsDone() + $this->awayGoalsDone();
    }

    public function goalsSuffered() {
        return $this->homeGoalsSuffered() + $this->awayGoalsSuffered();
    }

    public function goalsDifference() {
        return $this->goalsDone() - $this->goalsSuffered();
    }

    public function totalPoints() {
        return DB::table('rankings')->where('team_id', $this->id)->value('points');

    }

    public function updatePoints($points){
        $updated_points = $this->totalPoints() + $points;
        $affected = DB::table('rankings')
            ->where('team_id', $this->id)
            ->update(['points' => $updated_points]);

    }
}
