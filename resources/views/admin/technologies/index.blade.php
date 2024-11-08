@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tecnologie</h1>
    <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary mb-3">Aggiungi Tecnologia</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>{{ $technology->name }}</td>
                    <td>
                        <a href="{{ route('admin.technologies.show', $technology->id) }}" class="btn btn-info">Visualizza</a>
                        <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
