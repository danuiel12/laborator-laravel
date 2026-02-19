@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5 border-start border-4 border-warning">
                <h2 class="text-brown mb-4">Contactează Biblioteca</h2>
                <p>Ai întrebări despre un împrumut sau o carte anume? Scrie-ne!</p>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nume complet</label>
                        <input type="text" class="form-control shadow-sm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control shadow-sm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mesaj</label>
                        <textarea class="form-control shadow-sm" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary px-5">Trimite</button>
                </form>
            </div>
        </div>
    </div>
@endsection