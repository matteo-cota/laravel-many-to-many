<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Film</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista dei Film</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Genere</th>
                    <th>Autori</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                    <tr>
                        <td>{{ $film->title }}</td>
                        <td>{{ $film->genre }}</td>
                        <td>{{ $film->authors }}</td>
                        <td>
                            <a href="{{ route('admin.posts.show', $film->id) }}" class="btn btn-info">Visualizza</a>
                            <a href="{{ route('admin.posts.edit', $film->id) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('admin.posts.destroy', $film->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
