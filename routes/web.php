<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;
 
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

// Route::get('create', function(){
//     return view('create');
// });

 
Route::get('/create', [CrudController::class, 'show_create']);

Route::post('/create', [CrudController::class, 'create'])->name('create');

Route::get('/read', [CrudController::class, 'read'])->name('read');

Route::get('/update/{info}',[CrudController::class, 'show_update'])->name('show.update');
Route::put('/update/{info}',[CrudController::class, 'update'])->name('update');

Route::GET('/delete/{info}',[CrudController::class, 'delete'])->name('delete');




