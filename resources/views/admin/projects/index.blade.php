@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1>Elenco Progetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Vedi</a>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
