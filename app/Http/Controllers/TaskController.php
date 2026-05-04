<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // 1. Fungsi untuk menampilkan semua task
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // 2. Fungsi untuk menyimpan task baru
    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);
        Task::create(['title' => $request->title]);
        return redirect()->back();
    }

    // 3. Fungsi DELETE yang baru saja kamu buat
    public function destroy(Task $task)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh menghapus tugas ini!');
        }

        $task->delete();
        return redirect()->back()->with('success', 'Task berhasil dihapus');
    }
}