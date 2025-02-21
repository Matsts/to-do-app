<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\teamController;
use App\Models\category;

//Users can"t view dashboard without logging in
Route::middleware("auth")->group(function () {
    Route::get("/dashboard", [taskController::class, "dashboard"])->name("dashboard");
});

Route::middleware("auth")->group(function () {
    Route::get("/", [taskController::class, "dashboard"])->name("dashboard");
});

Route::get("/register", [authController::class, "showRegister"])->name("register.form");
Route::post("/register", [authController::class, "register"])->name("register");
Route::get("/login", [authController::class, "showLogin"])->name("login.form");
Route::post("/login", [authController::class, "login"])->name("login");
Route::post("/logout", [authController::class, "logout"])->name("logout")->middleware("auth");
Route::post("/storeCategory", [categoryController::class, "store"])->name("category.store");
Route::get("/task/create/{id}", [TaskController::class, "create"])->name("task.create");
Route::post("/task/store", [TaskController::class, "store"])->name("task.store");
Route::get("/task/show/{id}", [taskController::class, "show"])->name("task.show");
Route::post("/task/update-category/{task}", [TaskController::class, "updateCategory"])->name("task.updateCategory");
Route::get("/task/delete/{id}", [taskController::class, "delete"])->name("task.delete");
Route::get("/task/edit/{id}", [taskController::class, "edit"])->name("task.edit");
Route::post("/task/update/{id}", [taskController::class, "update"])->name("task.update");
Route::post("/task/updatePrio/{id}", [taskController::class, "updatePrio"])->name("task.updatePrio");
Route::get("/deleteCategory/{id}", [categoryController::class, "delete"])->name("category.delete");
Route::get("/createCategory", [categoryController::class, "create"])->name("category.create");
Route::get("/inviteTeam", [teamController::class, "invite"])->name("team.invite");
Route::get("/teamForm", [teamController::class, "form"])->name("team.form");
Route::post("/team/store", [teamController::class, "store"])->name("team.store");
Route::post("/joinTeam/accept", [teamController::class, "accept"])->name("team.accept");
Route::get("/joinTeam", [teamController::class, "join"])->name("team.join");
Route::post("/leaveTeam", [teamController::class, "leave"])->name("team.leave");



