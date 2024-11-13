@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>Modifica Progetto</h2>
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo di Progetto</label>
            <select name="type_id" id="type_id" class="form-control">
                <option value="">Seleziona il tipo di progetto</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id', $project->type_id) == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
</div>
@endsection
