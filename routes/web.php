<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\MeetingRoomController;
use App\Http\Controllers\Roomcontroller;
use App\Http\Controllers\ViewRoomController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'index']);

Route::get('/rooms/{room_meeting}', 'Roomcontroller@index');

Route::get('rooms', [Roomcontroller::class, 'index']);
//booking link meeting
Route::get('posts', [Postcontroller::class, 'index']);
Route::get('posts/create', [Postcontroller::class, 'create']);
Route::post('posts', [Postcontroller::class, 'store']);
Route::get('posts/viewedit', [Postcontroller::class, 'viewedit']);
Route::get('posts/{id}/edit', [Postcontroller::class, 'edit']);
Route::get('posts/{id}', [Postcontroller::class, 'show']);
Route::patch('posts/{id}', [Postcontroller::class, 'update']);
Route::delete('posts/{id}', [Postcontroller::class, 'destroy']);

//booking ruang meeting
// Menampilkan daftar ruang meeting
Route::get('rmeeting', [MeetingRoomController::class, 'index']);
// Menampilkan formulir pembuatan ruang meeting
Route::get('rmeeting/create', [MeetingRoomController::class, 'create']);
// Menyimpan data ruang meeting yang baru dibuat
Route::post('rmeeting', [MeetingRoomController::class, 'store']);
// Menampilkan informasi detail ruang meeting
Route::get('rmeeting/{id}', [MeetingRoomController::class, 'show']);
// Menampilkan formulir pengeditan ruang meeting
Route::get('rmeeting/{id}/edit', [MeetingRoomController::class, 'edit']);
// Menyimpan perubahan pada ruang meeting yang diubah
Route::put('rmeeting/{id}', [MeetingRoomController::class, 'update']);
// Menghapus ruang meeting
Route::delete('rmeeting/{id}', [MeetingRoomController::class, 'destroy']);




