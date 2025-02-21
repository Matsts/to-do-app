<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Auth;

class categoryController
{

    public function create()
    {

        return view("createCategory");
    }
    //creates a new category
    public function store(Request $request)
    {

        $title = $request->input("title");

        $category = new category();

        $category->team_id = Auth::user()->team_id;
        $category->title = $title;
        $category->save();

        return redirect()->route("dashboard");
    }

    public function delete($id)
    {
        $category = category::findOrFail($id);

        $category->delete();

        return redirect()->route("dashboard");
    }
}
