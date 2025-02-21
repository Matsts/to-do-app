@extends('layouts.app')

<div class="centered-container">
    <div class="centered-content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input class="form-control" type="email" name="email" placeholder="E-mail" required><br>
            <div class="spacer"></div>
            <input class="form-control" type="password" name="password" placeholder="Wachtwoord" required><br>
            <div class="spacer"></div>
            <button class="btn btn-primary" type="submit">Log in</button><div class="spacer-xs"></div><a href="/register" class="btn btn-primary" type="submit">registreren</a>
        </form>
    </div>
</div>
