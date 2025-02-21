<html>

<head>
    @extends("layouts.app")
</head>

<body>
    <div class="spacer-m"></div>
    <div class="icon-bar">
        <form action="{{ route("logout") }}" method="POST">
            @csrf
            <button onclick="return confirm('Weet je zeker dat je wilt uitloggen?')" class="btn btn-danger"
                type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                    <path fill-rule="evenodd"
                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                </svg></button>
        </form>
        @if(blank($user->team_id))
        <form method="POST" action="{{ route('team.store') }}">
            @csrf
            <input type="hidden" name="id" value="{{ Auth::id() }}">
            <button onclick="return alert('Nieuw team aangemaakt!')" class="btn btn-success" type="submit"><svg
                    xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    <path fill-rule="evenodd"
                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                </svg></button>
        </form>
        @else
        <form method="POST" action="{{ route('team.leave') }}">
            @csrf
            <input type="hidden" name="id" value="{{ Auth::id() }}">
            <button
                onclick="return confirm('wil je je huidige team verlaten? Als je de laatste bent die het team verlaat word alles verwijderd!')"
                class="btn btn-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    fill="currentColor" class="bi bi-person-dash-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5" />
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg></button>
        </form>
        @endif
    </div>
    <div class="icon-bar-2">
        @if(blank($user->team_id))
        <button class="btn btn-primary"
            onclick="return alert('Maak of join een team voordat je andere uitnodigd.')"><svg
                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-person-fill-up" viewBox="0 0 16 16">
                <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                    d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
            </svg></button>
        @else
        <a href="/inviteTeam" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                fill="currentColor" class="bi bi-person-fill-up" viewBox="0 0 16 16">
                <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                    d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
            </svg></a>
        @endif
        @if(blank($user->team_id))
        <a href="/joinTeam" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                fill="currentColor" class="bi bi-person-fill-down" viewBox="0 0 16 16">
                <path
                    d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                    d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
            </svg></a>
        @else
        <button onclick="return alert('Verlaat eerst je team voordat je een nieuwe joined.')"
            class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-person-fill-down" viewBox="0 0 16 16">
                <path
                    d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                    d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
            </svg></button>
        @endif
        @if(blank($user->team_id))
        <button class="btn btn-primary"
            onclick="return alert('Maak of join een team om tasks/categorieën te maken. Je kan een team aanmaken met de groene knop of een team joinen door te drukken op het poppetje met een pijltje omlaag.')"><svg
                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg></button>
        @else
        <a href="/createCategory" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg></a>
        @endif
    </div>
    <div class="spacer"></div>
    <div class="container">
        <!-- categories -->
        <div class="categories-scroll-container">
            @foreach ($categories as $category)
            <div class="category-item">
                <h2>
                    <a href="{{ url("deleteCategory/" . $category->id) }}" class="btn btn-danger btn-sm"
                        onclick="return confirm('Weet je zeker dat je deze categorie wilt verwijderen?')">-</a>
                    <span class="spacer-xs"></span>
                    {{ $category->title }}
                    <span class="spacer-xs"></span>
                    <a href="{{ url("task/create/" . $category->id) }}" class="btn btn-success btn-sm">+</a>
                </h2>
                <!-- tasks per category -->
                <div class="tasks-container">
                    @foreach ($tasks as $task)
                    @if($task->category_id == $category->id)
                    <div class="task-item">
                        <!-- Dropdown button -->
                        <div class="icon-top-left">
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
                        </div>
                        <div class="dropdown-container">
                            <button class="dropdown-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg>
                            </button>
                            <div class="dropdown-content">
                                <form action="{{ route("task.updateCategory", ["task"=> $task->id]) }}" method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <select name="category_id" class="form-select" onchange="this.form.submit()">
                                            @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}" {{ $task->category_id == $cat->id ?
                                                "selected" : "" }}>
                                                {{ $cat->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <a href="{{ route("task.show", ["id"=> $task->id]) }}" class="round-btn"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg></a>

                        <h3>{{ $task->title }}</h3><br>
                        <p>{{ Str::limit($task->desc, 50, "...") }}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
