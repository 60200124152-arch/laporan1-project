<!DOCTYPE html>
<html>
<head>
    <title>Task App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Daftar Task</h1>

    <a href="/tasks/create" class="btn btn-primary mb-3">Tambah Task</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>
                    <a href="/tasks/{{ $task->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                    <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>