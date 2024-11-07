@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un nuovo post</h1>

    <!-- Verifica per eventuali errori di validazione -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form per creare un nuovo post -->
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="genre">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}" required>
        </div>

        <div class="form-group">
            <label for="authors">Autori</label>
            <input type="text" class="form-control" id="authors" name="authors" value="{{ old('authors') }}" required>
        </div>

        <div class="form-group">
            <label for="type">Tipo</label>
            <select class="form-control" id="type" name="type" required>
                <option value="film" {{ old('type') == 'film' ? 'selected' : '' }}>Film</option>
                <option value="post" {{ old('type') == 'post' ? 'selected' : '' }}>Post</option>
            </select>
        </div>

        <!-- Selezione Tecnologie -->
        <div class="form-group">
            <label for="technologies">Tecnologie</label>
            <select class="form-control" id="technologies" name="technologies[]" multiple>
                @foreach ($technologies as $technology)
                    <option value="{{ $technology->id }}" {{ in_array($technology->id, old('technologies', [])) ? 'selected' : '' }}>
                        {{ $technology->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crea Post</button>
    </form>
</div>
@endsection
