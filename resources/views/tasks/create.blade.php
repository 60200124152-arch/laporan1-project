<!DOCTYPE html>
<html>
<head>
    <title>Tambah Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Tambah Task</h1>

    <form action="/tasks" method="POST">
        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="/tasks" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>