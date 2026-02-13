<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    public function index() {
        return view("champions.index", [
            "champions" => Champion::all()
        ]);
    }
}
