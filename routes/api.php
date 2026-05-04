<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello my name aca',
        'status' => 200
    ]);
});