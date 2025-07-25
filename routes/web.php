<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/inspecciones', 'inspections.index')->name('inspections.index');

Route::view('maquinaria', 'machines.index')->name('machines.index');
Route::view('maquinaria/perforadoras', 'machines.perforadoras')->name('machines.perforadoras');
Route::view('maquinaria/perforadoras', 'machines.perforadoras')->name('machines.perforadoras');

Route::view('reportes', 'reports.index')->name('reports.index');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
});
