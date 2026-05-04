<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Edit Task</h1>

    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/tasks" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>