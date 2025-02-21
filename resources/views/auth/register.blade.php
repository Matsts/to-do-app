@extends('layouts.app')

<div class="centered-container">
    <div class="centered-content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="Naam" value="{{ old('name') }}" required>
            <div class="spacer"></div>
            <input class="form-control" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
            <div class="spacer"></div>
            <input class="form-control" type="password" name="password" placeholder="Wachtwoord" required>
            <div class="spacer"></div>
            <input class="form-control" type="password" name="password_confirmation" placeholder="Bevestig wachtwoord" required>
            <div class="spacer"></div>
            <button class="btn btn-success" type="submit">Registreer</button><div class="spacer-xs"></div><a href="/login" class="btn btn-primary" type="submit">login</a>
        </form>
    </div>
</div>
