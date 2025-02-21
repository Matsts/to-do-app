@extends('layouts.app')

<div class="centered-container">
    <div class="centered-content">
        <form method="POST" action="{{ route('team.accept') }}">
            @csrf
            <input class="form-control" type="string" name="team_id" placeholder="team id" required><br>
            <div class="spacer"></div>
            <button class="btn btn-success" type="submit">Join team</button>
        </form>
    </div>
</div>
