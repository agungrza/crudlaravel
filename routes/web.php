<?php
//koneksi ke TambahController
use App\Http\Controllers\TambahController;
//koneksi ke User Model
use App\Models\User;
use Illuminate\Support\Facades\Route;

// masuk ke halaman index
Route::get('/', function () {
    return view('index', ['users' => User::all()]);
});

// masuk ke halaman tambah
Route::get('/tambah', function () {
    return view('tambahuser');
});

// CREATE
Route::post('/tambah', [TambahController::class,'create']);

// masuk ke halaman update
Route::get('/tambah/{users:id}/update', function (User $users) {
    return view('updateuser', ['users' => $users]);
});

// UPDATE
Route::put('/tambah/{users:id}/update', [TambahController::class, 'update']);

// DELETE
Route::delete('/tambah/{users:id}',[TambahController::class, 'delete']);