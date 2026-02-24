<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // Foarte important să avem asta aici!

class SiteController extends Controller
{
    // Pagina de Welcome (cea de la Lab 4)
    public function home() {
        $infoApp = ['nume_proiect' => 'Biblioteca Laravel', 'autor' => 'Știrbu Daniel'];
        $categorii = ['Ficțiune', 'Istorie', 'Tehnologie', 'Filozofie'];
        return view('welcome', compact('infoApp', 'categorii'));
    }
    public function services() {
        return view('services');
    }

    
    public function index() {
        // Interogare simplă: Luăm toate cărțile
        $carti = Book::all(); 
        
        // Exemplu Interogare suplimentară (Sortare după titlu):
        // $carti = Book::orderBy('titlu', 'asc')->get();

        return view('books.index', compact('carti'));
    }

    // 2. POST – Adăugarea unei înregistrări noi
    public function store(Request $request) {
        $request->validate([
            'titlu' => 'required',
            'autor' => 'required',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Carte adăugată cu succes!');
    }

    // 3. DELETE – Ștergerea unei înregistrări după id
    public function destroy($id) {
        $carte = Book::findOrFail($id);
        $carte->delete();
        return redirect()->route('books.index')->with('success', 'Carte ștearsă!');
    }
    // Metoda pentru pagina Despre Noi
public function about() {
    return view('about'); 
}

// Metoda pentru pagina Contact
public function contact() {
    return view('contact');
}
}