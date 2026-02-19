<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
    $infoApp = [
        'nume_proiect' => 'Biblioteca Academiei Laravel',
        'autor' => 'Știrbu Daniel',
        'versiune' => '4.0 (Blade edition)'
    ];

    $categorii = ['Ficțiune', 'Istorie', 'Tehnologie', 'Filozofie', 'Poezie'];

    return view('welcome', compact('infoApp', 'categorii'));
}

    public function about() {
        return view('about');
    }

    // În SiteController.php modifică linia asta:
public function services() {
    return view('services'); 
}

    public function contact() {
        return view('contact');
    }

 
    public function admin() {
        return view('admin'); 
    }
} 