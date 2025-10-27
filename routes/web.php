<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('sjg');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get("/Clientes",[ClienteController::class, "index"])->name("clientes.index");

Route::get("/Clientes/create",[ClienteController::class, "create"])->name("clientes.create");
Route::post("/Clientes",[ClienteController::class, "store"])->name("clientes.store");

Route::get("/Clientes/{cliente}/edit",[ClienteController::class, "edit"])->name("clientes.edit");
Route::put("/Clientes/{cliente}",[ClienteController::class, "update"])->name("clientes.update");

Route::delete("/Clientes/{cliente}",[ClienteController::class, "destroy"])->name("clientes.destroy");