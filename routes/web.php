<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home',[
        'name' => 'John Doe',
        'frameworks' => [
            'Laravel',
            'Vue',
        ],
    ]);

});

Route::get('/users', function () {
    return Inertia::render('Users',[
        'users' => User::all()->map(function($q){
            return [
                'id' => $q->id,
                'name' => $q->name
            ];
        })
    ]);

});

Route::get('/settings', function () {
    return Inertia::render('Settings',[
        'name' => 'John Doe',
        'frameworks' => [
            'Laravel',
            'Vue',
        ],
    ]);

});

Route::post('/logout', function(){
    dd('logout');
});
