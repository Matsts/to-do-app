@extends('layouts.app')

<div class="centered-container">
    <div class="centered-content">
        <form method="POST" action="{{ route('task.store') }}">
            @csrf
            <input class="form-control" type="string" name="title" placeholder="titel" required><br>
            <div class="spacer"></div>
            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea><br>
            <div class="spacer"></div>
            <input type="hidden" name="id" value="{{ $category->id }}">
            <button class="btn btn-success" type="submit">Maak task</button>
        </form>
    </div>
</div>
