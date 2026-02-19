@extends('layout')

@section('content')
<div class="alert alert-danger text-center">
    <h3><i class="bi bi-shield-lock"></i> Zonă Administrativă</h3>
    <p>Accesul este permis doar personalului bibliotecii.</p>
    <hr>
    <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-dark">Adaugă Carte Nouă</button>
        <button class="btn btn-outline-dark">Gestionare Utilizatori</button>
    </div>
</div>
@endsection