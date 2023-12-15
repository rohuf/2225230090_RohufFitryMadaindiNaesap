<?php
//Route::get('/', function () {
    //    return view('welcome');
// });
// Route::resource('/database', rohuf3::class)
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RohufixController;

// Route::get('/create', function () {
//     return view('create');
// });

// Route::get('/database', function () {
//     return view('database', [
//         'tokorohuf' => tokorohuf::all()
        
//     ]);
// });

// Route::get('/delate', function () {
//     return view('delate');
// });

// Route::get('/edit', function () {
//     return view('edit');
// });

// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/album',[RohufixController::class, 'index'])->name('album');

Route::get('/tambah',[RohufixController::class, 'tambah'])->name('tambah');
Route::post('/insertdata',[RohufixController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[RohufixController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[RohufixController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[RohufixController::class, 'delete'])->name('delete');

?>