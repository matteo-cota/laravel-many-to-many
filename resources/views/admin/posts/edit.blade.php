<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Post</title>
</head>
<body>
    <h1>Modifica Post</h1>

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>

        <div>
            <label for="content">Contenuto</label>
            <textarea id="content" name="content">{{ $post->content }}</textarea>
        </div>

        <button type="submit">Aggiorna</button>
    </form>

    <a href="{{ route('admin.posts.index') }}">Torna alla lista dei post</a>
</body>
</html>
