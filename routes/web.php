<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request;

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
    return Inertia::render('Users/Index',[
        'users' => User::query()
            ->when(Request::input('search'), function($query, $search){
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(function($q){
            return [
                'id' => $q->id,
                'name' => $q->name
            ];
        }),
        'filters' => Request::only([
            'search'
        ])
    ]);

});

Route::post('/users', function () {
    Request::validate([
        'name' => 'required',
        'email' => ['required', 'email'],
        'password' => ['required', 'min:5']
    ]);

    User::create([
        'name' => Request::input('name'),
        'email' => Request::input('email'),
        'password' => bcrypt(Request::input('password'))
    ]);

    return redirect('/users');
});

Route::get('/users/create', function () {
    return Inertia::render('Users/Create');

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
