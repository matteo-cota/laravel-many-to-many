@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p><strong>Genere:</strong> {{ $post->genre }}</p>
    <p><strong>Autori:</strong> {{ $post->authors }}</p>
    <p><strong>Tipo:</strong> {{ $post->type }}</p>

    <h3>Tecnologie utilizzate:</h3>
    <ul>
        @foreach($post->technologies as $technology)
            <li>{{ $technology->name }}</li>
        @endforeach
    </ul>

    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Torna alla lista dei post</a>
</div>
@endsection
