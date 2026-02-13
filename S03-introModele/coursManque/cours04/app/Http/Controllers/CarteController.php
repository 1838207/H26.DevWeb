<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    /**
     * Affiche la liste des cartes(accueil)
     *
     * @return View
     */
    public function index(Request $request) {
        //$cartes = Carte::all();
        //$categories = Categorie::all();

        return view('produits.index', [
            //"cartes" => $cartes si on fait la requête "à parts"
            "cartes" => Carte::all(),
            "categories" => Categorie::all(),
            //"recherche" => $request->input('recherche')
        ]);
    }

    public function show(int $id) {
        //dd($id);
        return view('produits.show', [
            "categories" => Categorie::all(),
            "carte" => Carte::findOrFail($id)
        ]);
    }


    /*
    public function index(){
        // retrieve all cards
        $cartes = Carte::all();
        //dd($cartes); // dump & die = var_dump()

        // retrieve all cards
        $categories = Categorie::all();
        //dd($categories);

        // retrieve specific card based on id
        $carte = Carte::findOrFail(1);
        //dd($carte);

        // retrieve cards worth 200 or more
        $cartes = Carte::where('prix', '>=', 200)
                -> get();

        //dd($cartes);

        // retrieve cards where nb is lower than 50
        $cartes = Carte::where('nb_cartes', '<', 50)
                -> get();
        //dd($cartes);

        // retrieve cards whose name contains "SPx" - LIKE:
        $cartes = Carte::whereLike('nom', '%Spx%')
                ->get();
        //dd($cartes);

        // Récupérer les cartes qui correspondent à une catégorie spécifique
        $cartes = Carte::where('categorie_id', '=', 3)->get();
        //dd($cartes);

        // Cartes appartenant à deux catégories
        $cartes = Carte::whereIn('categorie_id', [3, 4])->get(); // whereIn va être utile cette session
        //dd($cartes);

        $cartes = Carte::whereIn('categorie_id', [2, 3])
                        ->whereLike('nom', "%2022%") // ET. pour OU : orWhereLike()
                        // Pourrait faire dd(); pour voir la requête uniquement
                        ->get();

        // Trier les cartes selon le prix
        $cartes = Carte::orderBy('prix', 'asc')->get();

        // Les 3 cartes les plus cher
        $cartes = Carte::orderBy('prix', 'desc')->limit(3)->get();

        // Prix moyen
        $moyenne = Carte::avg('prix');
        //dd($moyenne);

        // La carte la moins chère
        $carte = Carte::orderBy('prix')->first(); // asc est par défaut. donc retourne 1 carte, au lieu d'un tableau[] comme get();
        //dd($carte);
        // Cartes qui ont un prix entre 150 et 300$
        $cartes = Carte::whereBetween('prix', [150, 300])->get();

        // Compter les cartes
        $nbCartes = Carte::count('*'); // Compte toute la table. Pourrait ajouter un ->where()->get()
        dd($nbCartes);

        return view("produits.index");
    }
    */
}
