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

/* Route::get('/', function () {
    return view('test', [
        'name' => request('name')
    ]);
});
 */
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'postingan pertamaku' => 'hai gess ini postingan pertamaku',
        'postingan keduaku' => 'ini yang keduanya'
    ];

    return view('post', []);
});

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('test', function(){
    
    return view('test');
});8/