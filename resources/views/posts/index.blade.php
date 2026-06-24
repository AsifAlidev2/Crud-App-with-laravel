<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">📝 All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Add New Post</a>
    </div>

    @if($posts->isEmpty())
        <div class="alert alert-warning">No posts found — create your first post!</div>
    @endif

    @foreach ($posts as $post)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h4 class="card-title fw-bold">{{ $post->title }}</h4>
                <p class="card-text text-muted">{{ $post->body }}</p>

                <div class="d-flex gap-2">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>

                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">🗑️ Delete</button>
                    </form>
                </div>

            </div>
        </div>
    @endforeach

</div>

</body>
</html>