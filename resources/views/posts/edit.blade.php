<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-sm">
                <div class="card-header bg-warning fw-bold">
                    ✏️ Edit Post
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Body</label>
                            <textarea name="body" class="form-control" rows="5">{{ $post->body }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Go Back</a>
                            <button type="submit" class="btn btn-warning">Update Post</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>