<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchatController extends Controller
{
    /**
     * Affiche la liste des achats (panier)
     *
     * @return View
     */
    public function index() {
        return view("achats.index");
    }
}
