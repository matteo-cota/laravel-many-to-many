@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica Post</h1>

    <!-- Form per modificare un post -->
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="genre">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $post->genre }}">
        </div>

        <div class="form-group">
            <label for="authors">Autori</label>
            <input type="text" class="form-control" id="authors" name="authors" value="{{ $post->authors }}">
        </div>

        <div class="form-group">
            <label for="type">Tipo</label>
            <select class="form-control" id="type" name="type" required>
                <option value="film" {{ $post->type == 'film' ? 'selected' : '' }}>Film</option>
                <option value="post" {{ $post->type == 'post' ? 'selected' : '' }}>Post</option>
            </select>
        </div>

        <!-- Selezione Tecnologie -->
        <div class="form-group">
            <label for="technologies">Tecnologie</label>
            <select class="form-control" id="technologies" name="technologies[]" multiple>
                @foreach ($technologies as $technology)
                    <option value="{{ $technology->id }}" {{ in_array($technology->id, $post->technologies->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $technology->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>

    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary mt-3">Torna alla lista dei post</a>
</div>
@endsection
