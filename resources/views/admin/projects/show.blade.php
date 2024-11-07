@extends('layouts.app')

@section('content')
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->description }}</p>

    <h3>Technologies Used:</h3>
    <ul>
        @foreach($project->technologies as $technology)
            <li>{{ $technology->name }}</li>
        @endforeach
    </ul>
@endsection
