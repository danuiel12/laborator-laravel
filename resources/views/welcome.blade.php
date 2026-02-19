@extends('layouts.app') @section('content')
    <div class="text-center py-5">
        <h1 class="display-4 text-brown">Bine ai venit la {{ $infoApp['nume_proiect'] }}</h1>
        <p class="lead italic">Gestionat de: <strong>{{ $infoApp['autor'] }}</strong></p>
        <hr style="border-top: 2px solid #d4af37; width: 50%; margin: auto;">
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center mb-4">📚 Secțiunile Bibliotecii</h3>
            
            <div class="list-group shadow-sm">
                @foreach($categorii as $cat)
                    <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>📖 {{ $cat }}</span>
                        <span class="badge bg-warning text-dark rounded-pill">Disponibil</span>
                    </div>
                @endforeach
            </div>

            @if(count($categorii) > 0)
                <p class="text-muted mt-3 text-center small">Momentan avem {{ count($categorii) }} categorii principale listate.</p>
            @endif
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="/services" class="btn btn-lg btn-outline-dark" style="border-color: #d4af37;">Explorează Catalogul Complet</a>
    </div>
@endsection