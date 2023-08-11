<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('requestdownload', function (){
//     $name = 'hehe.txt';
//     $path = public_path().'/hehe.txt';
//     $headers  =array(
//         'Content-type : application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });



// Route::get('/server_error', function(){
//     return view('server_error', 500);
// });


Route::get('/posdata', [StudentController::class, 'index'])->middleware('auth');


Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);

Route::get('/create_account', [UserController::class, 'create']);


Route::post('/logout', [UserController::class, 'logout']);

Route::post('/main', [UserController::class, 'store']);

Route::get('/', [UserController::class, 'home']);

Route::get('/add/student', [StudentController::class, 'create']);

Route::post('/add/student', [StudentController::class, 'store']);

Route::get('/index/{id}', [StudentController::class, 'show']);

Route::put('/index/{student}', [StudentController::class, 'update']);
Route::put('/index/{student}', [StudentController::class, 'update']);

Route::put('/index/{student}', [StudentController::class, 'destroy']);

