<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all(); // Recupera tutte le categorie
        //dd($categories);
        $products = Product::all(); // Recupera tutti i prodotti

        // Passa le variabili alla vista
        return view('welcome', compact('categories', 'products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validazione del form
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Creazione del prodotto
        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        // Gestione del caricamento dell'immagine
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Salva l'immagine nella cartella "images" in storage/app/public
            $product->image = $imagePath; // Salva il percorso dell'immagine nel database
        }

        // Salvataggio del prodotto
        $product->save();

        // Redirect con messaggio di successo
        return redirect()->route('welcome')->with('message', 'Prodotto aggiunto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
