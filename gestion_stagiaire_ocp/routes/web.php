<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminusertable;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';
Route::get('/dashboard', [adminusertable::class, 'showetat'])->middleware(['auth'])->name('dashboard');

Route::get('/admin/dashboard', [adminusertable::class, 'index'])->middleware(['auth:admin'])->name('admin.dashboard');

Route::put('/admin/dashboard/{id}', [adminusertable::class, 'updateEtat'])->name('update.etat');
Route::put('/dashboard/another/{id}', [adminusertable::class, 'updateAnother'])->name('update.another');

    Route::get('/admin/valider', [adminusertable::class, 'valider'])->middleware(['auth:admin'])->name('admin.valider');
    Route::get('/admin/valider/pdf/{id}', [adminusertable::class, 'generatePDF'])->name('generate.pdf');
   

//non valider 

Route::get('/admin/non_valider', [adminusertable::class, 'nonvalider'])->middleware(['auth:admin'])->name('admin.non_valider');



require __DIR__.'/adminauth.php';



