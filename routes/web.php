<?php

use Illuminate\Support\Facades\Route;

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
/*
! Similar With:
Route::view('/','welcome');
*/
Route::view('/a','notwelcome');

// Route::get("/a", function () {
//     return view('notwelcome');
// });
Route::get("/profil", function () {return view('welcome');});
Route::view("/kullanici", 'kullanici');
// Route::redirect('/kullanici', '/profil');

// Route::prefix('profil')->group(function () {
//         Route::view('/a','notwelcome');
//         Route::get('/b', function() {
//             return view('welcome');
//         });
// });

// Route::fallback(function() {
//     Route::view("/hata", function() {
//         return "Aradigin sayfa yok";
//     });
// }); -> // ! calismasi icin bir prefix sayfasinin icinde olmasi gerekiyor 

    Route::view('/z','notwelcome')->name("zpage");