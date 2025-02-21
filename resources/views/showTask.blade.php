<html>

<head>
    @extends('layouts.app')
</head>
<div class="centered-container-1">
    <p class="text-bar"><a href="/" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                <path fill-rule="evenodd"
                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
            </svg></a>
        <a href="{{ route('task.delete', $task->id) }}" class="btn btn-danger"
            onclick="return confirm('Weet je zeker dat je deze task wilt verwijderen?')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3"
                viewBox="0 0 16 16">
                <path
                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
            </svg></a>
        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-warning text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
                viewBox="0 0 16 16">
                <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
            </svg></a>
        @switch($task->prio)
        @case(1)
        <x-priority-icon color="#8B0000" />
        @break

        @case(2)
        <x-priority-icon color="red" />
        @break
        @case(3)
        <x-priority-icon color="orange" />
        @break
        @case(4)
        <x-priority-icon color="yellow" />
        @break
        @case(5)
        <x-priority-icon color="green" />
        @break
        @endswitch
    <div class="dropdown" style="position: absolute; margin-left:875; margin-top:5px;">
        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5z" />
            </svg> </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <form action="{{ route('task.updatePrio', ['id' => $task->id]) }}" method="POST">
                @csrf
                <div class="input-group">
                    <select name="prio" class="form-select" onchange="this.form.submit()">
                        <option style="color: rgb(198, 0, 0);" value="1" {{ $task->prio == '1' ? 'selected' : '' }}>1
                        </option>
                        <option style="color: red;" value="2" {{ $task->prio == '2' ? 'selected' : '' }}>2</option>
                        <option style="color: orange;" value="3" {{ $task->prio == '3' ? 'selected' : '' }}>3</option>
                        <option style="color: yellow;" value="4" {{ $task->prio == '4' ? 'selected' : '' }}>4</option>
                        <option style="color: green;" value="5" {{ $task->prio == '5' ? 'selected' : '' }}>5</option>
                        <option value="0" {{ $task->prio == '0' ? 'selected' : '' }}>Verwijder prioriteit</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    </p>
    <p class="text-top">{{ $task->title }}</p>
    <p class="text-lower">{!! nl2br(e($task->desc)) !!}</p>
    <p class="text-lower-l">Gemaakt door: {{ $task->created_by }}</p>

</div>
