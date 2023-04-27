<?php

namespace App\Http\Controllers;

use App\Models\AchatProduit;
use App\Models\Category;
use App\Models\Fournisseur;
use App\Models\ModeReglement;
use App\Models\Produit;
use App\Models\ReglementAchat;
use App\Models\Status;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('revenus.list-revenu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $fournisseurs = Fournisseur::all();
        $mode_reglements = ModeReglement::all();
        $status = Status::all();



        return view('revenus.add-revenu',['categories'=>$categories,
                                            'fournisseurs'=>$fournisseurs
                                            ,'mode_reglements'=>$mode_reglements
                                            ,'status' => $status]);


    }

    public function get_produit($id){

        $produits = Produit::where('category_id',$id)->get();

        return response()->json($produits);

    }

    public function info_produit($id){

        $produit = Produit::where('id',$id)->first();
        return response()->json($produit);


    }

    public function get_price($qte){

        return response()->json($qte);


    }

    public function valider_achat(Request $request)
    {       
        $produit = Produit::where('nom_produit',$request->data['libelle'])->first();
        $achat_produit = new AchatProduit();
        $achat_produit->libelle = $request->data['libelle'];
        $achat_produit->quantity =$request->data['quantity'];
        $achat_produit->prix = $request->data['prix'];
        $achat_produit->total_ht = $request->data['total_ht'];
        $achat_produit->total_ttc = $request->data['total_ttc'];
        $achat_produit->produit_id = $produit->id;
        $achat_produit->save();

        $mode_reglement = new ReglementAchat();
        $mode_reglement->mod_reg = $request->data_reg['mod_reg'];;
        $mode_reglement->avance = $request->data_reg['avance'];;
        $mode_reglement->reste = $request->data_reg['reste'];;
        $mode_reglement->status = $request->data_reg['status'];
        $mode_reglement->produit_id = $produit->id ;
        $mode_reglement->save();
        
        return response()->json(['status' =>'good']);
    }
}
