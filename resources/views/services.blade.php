@extends('layout')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-4" style="color: #2c1b0e;">Catalogul de Aur</h1>
    <p class="lead">Alege o capodoperă din rafturile noastre.</p>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Carte">
            <div class="card-body text-center">
                <h5 class="card-title">Misterele Programării</h5>
                <p class="card-text">O incursiune în lumea codului curat.</p>
                <button class="btn btn-biblioteca">Citește acum</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Carte">
            <div class="card-body text-center">
                <h5 class="card-title">Istoria Tehnologiei</h5>
                <p class="card-text">Evoluția de la abac la inteligență artificială.</p>
                <button class="btn btn-biblioteca">Împrumută</button>
            </div>
        </div>
    </div>
</div>
@endsection