@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Aggiungi Tecnologia</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.technologies.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection
