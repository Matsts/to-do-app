<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class taskController
{

    //show dashboard with category and task variables
    public function dashboard()
    {

        $categories = category::where("team_id", Auth::user()->team_id)->get();
        $tasks = task::where("team_id", Auth::user()->team_id)->get();
        $user = User::findOrFail(Auth::id());

        return view("dashboard", compact("categories", "tasks", "user"));
    }

    //show the form for creating a task
    public function create($id)
    {

        $category = category::findorfail($id);

        return view("createTask")->with("category", $category);
    }

    //stores a new task
    public function store(Request $request)
    {

        $task = new task;

        $id = $request->input("id");
        $title = $request->input("title");
        $desc = $request->input("desc");

        $task->desc = $desc;
        $task->category_id = $id;
        $task->title = $title;
        $task->team_id = Auth::user()->team_id;
        $task->created_by = Auth::user()->name;

        $task->save();

        return redirect()->route("dashboard");
    }

    //change the category the task is in
    public function updateCategory(Request $request, Task $task)
    {
        $task->category_id = $request->category_id;
        $task->save();
        return redirect()->route("dashboard");
    }

    //views  the task
    public function show($id)
    {

        $task = Task::findOrFail($id);

        return view("showTask", compact("task"));
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return redirect()->route("dashboard");
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view("editTask")->with("task", $task);
    }

    //edits the task
    public function update(Request $request, $id)
    {

        $request->validate([
            "title" => "required|string",
            "desc" => "required|string"
        ]);

        $task = Task::findOrFail($id);

        $task->update([
            "title" => $request->input("title"),
            "desc" => $request->input("desc")
        ]);

        return redirect()->route("dashboard");
    }

    public function updatePrio(Request $request, $id)
    {

        $task = Task::findOrFail($id);

        $task->prio = $request->prio;
        $task->save();

        return view("showTask", compact("task"));
    }
}
