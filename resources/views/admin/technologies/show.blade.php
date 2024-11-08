@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dettaglio Tecnologia</h1>

    <p><strong>Nome:</strong> {{ $technology->name }}</p>

    <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary">Torna alla lista</a>
</div>
@endsection
