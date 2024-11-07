@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Lista dei Film</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Genere</th>
                <th>Autori</th>
                <th>Tecnologie</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
                <tr>
                    <td>{{ $film->title }}</td>
                    <td>{{ $film->genre }}</td>
                    <td>{{ $film->authors }}</td>
                    <td>
                        @foreach($film->technologies as $technology)
                            <span class="badge badge-primary">{{ $technology->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.show', $film->id) }}" class="btn btn-info">Visualizza</a>
                        <a href="{{ route('admin.posts.edit', $film->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.posts.destroy', $film->id) }}" method="POST" style="display:inline;">
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
