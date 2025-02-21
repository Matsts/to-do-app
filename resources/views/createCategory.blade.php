@extends('layouts.app')

<div class="centered-container">
    <div class="centered-content">
        <form method="POST" action="{{ route('category.store') }}">
            @csrf
            <input class="form-control" type="string" name="title" placeholder="titel" required><br>
            <div class="spacer"></div>
            <button class="btn btn-success" type="submit">Maak categorie</button>
        </form>
    </div>
</div>
