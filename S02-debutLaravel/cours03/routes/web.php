<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Bonne méthode de nommer toutes les routes.
Route::get("/", [SiteController::class, "index"])->name("index");
