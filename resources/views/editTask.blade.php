@extends('layouts.app')

<div class="centered-container">
    <div class="centered-content">
        <form method="POST" action="{{ route('task.update', $task->id) }}">
            @csrf
            <input class="form-control" type="string" name="title" placeholder="titel" value="{{ $task->title }}" required><br>
            <div class="spacer"></div>
            <textarea class="form-control" id="desc" name="desc" rows="3">{{ $task->desc }}</textarea><br>
            <div class="spacer"></div>
            <button class="btn btn-success" type="submit">Verander task</button>
        </form>
    </div>
</div>
