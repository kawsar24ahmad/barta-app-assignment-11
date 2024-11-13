<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Post\PostCreate;
use App\Livewire\Post\PostEdit;
use App\Livewire\Post\PostIndex;
use App\Livewire\Post\PostShow;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=> 'auth'], function ()  {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::group(['prefix' => 'posts'], function()  {
        Route::get('/', PostIndex::class)->name('posts.index');
        Route::get('/create', PostCreate::class)->name('posts.create');
        Route::get('/{post}/edit', PostEdit::class)->name('posts.edit');
        Route::get('/{post}', PostShow::class)->name('posts.show');
    });
});

Route::group(['middleware'=> 'guest'], function () {
    Route::get("/register", Register::class)->name("register");
    Route::get("/login", Login::class)->name("login");
});






