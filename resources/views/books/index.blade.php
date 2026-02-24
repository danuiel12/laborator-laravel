@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-brown border-bottom pb-2">📚 Gestionare Bibliotecă</h2>

    <div class="card shadow-sm mb-5">
        <div class="card-header bg-warning text-dark">Adaugă o carte nouă</div>
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="titlu" class="form-control" placeholder="Titlu" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="autor" class="form-control" placeholder="Autor" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="descriere" class="form-control" placeholder="Mică descriere">
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="pagini" class="form-control" placeholder="Pagini">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark mt-3 w-100" style="background-color: #3e2723; border: none;">Salvează în Baza de Date</button>
            </form>
        </div>
    </div>

    <h3 class="mt-4">Lista Cărților Disponibile</h3>
    <table class="table table-hover mt-3 shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Titlu</th>
                <th>Autor</th>
                <th>Pagini</th>
                <th>Acțiuni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carti as $carte)
            <tr>
                <td><strong>{{ $carte->titlu }}</strong></td>
                <td>{{ $carte->autor }}</td>
                <td>{{ $carte->pagini }} pag.</td>
                <td>
                    <form action="{{ route('books.destroy', $carte->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Șterge</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection