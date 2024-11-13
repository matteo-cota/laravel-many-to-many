@extends('layouts.app')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

    @if($project->image)
        <div class="mb-3">
            <img src="{{ asset('storage/' . $project->image) }}" alt="Immagine del Progetto" class="img-fluid">
        </div>
    @endif

    <h3>Tecnologie Utilizzate:</h3>
    <ul>
        @foreach($project->technologies as $technology)
            <li>{{ $technology->name }}</li>
        @endforeach
    </ul>
@endsection
