@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica Tecnologia</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $technology->name) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
</div>
@endsection
