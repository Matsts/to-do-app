<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\category;
use App\Models\team;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class teamController
{
    //show the form for creating a team
    public function invite()
    {

        $id = User::findOrFail(Auth::id())->team_id;

        return view("inviteTeam")->with("id", $id);
    }

    public function store(Request $request)
    {

        $randomString = Str::uuid();

        $team = new Team();
        $team->team_id = $randomString;
        $team->save();

        $user = User::findOrfail(Auth::id());
        $user->team_id = $randomString;
        $user->save();

        return redirect()->route("dashboard");
    }

    public function leave()
    {

        $user = User::findOrFail(Auth::id());
        $team = team::where("team_id", $user->team_id)->first();

        $team->decrement("team_count");
        $user->team_id = NULL;

        $user->update();

        if ($team->team_count == 0) {

            Task::where("team_id", $team->team_id)->delete();
            category::where("team_id", $team->team_id)->delete();

            $team->delete();
        }
        return redirect()->route("dashboard");
    }

    public function join()
    {
        return view("joinTeam");
    }

    public function accept(Request $request)
    {

        $team_id = $request->input("team_id");

        $team = team::where("team_id", $team_id)->first();

        $team->increment("team_count");

        $user = User::findOrFail(Auth::id());

        $user->team_id = $team_id;
        $user->update();

        return redirect()->route("dashboard");
    }
}
