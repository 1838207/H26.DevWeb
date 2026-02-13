<?php

use App\Http\Controllers\ChampionController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ChampionController::class, "index"])->name("champions.index");
