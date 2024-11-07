@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->description }}</p>
    <p><strong>Tipo di progetto:</strong> {{ $project->type ? $project->type->name : 'Nessuna tipologia' }}</p>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna alla lista progetti</a>
</div>
@endsection
