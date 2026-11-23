<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        $prods = Product::all();

        return view('products.list', compact('prods'));
    }

    public function detail($id)
    {
        // /product/985
        // Product::find(985);

        $pr = Product::findOrFail($id);

        // if($pr == null) return "produit introuvable";

        return view('products.detail', compact('pr'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store
       ( Request $form  )
    {
        Product::create([
            "titre"=> $form->tt ,
            "prix"=> $form->input('pp'),
        ]);

        return redirect()
        ->route('products.index')
        ->with('success','Le produit '.$form->tt.
        ' a été ajouter avec succès !');
    }

    // operations CRUD

    // SSR : SERVER SIDE RENDERING (bien pour SEO : google
}
