<?php

/** @noinspection PhpUndefinedMethodInspection */

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

Route::get('authorize/{provider}', 'Auth\LoginController@redirectToProvider')->name('auth.social.redirect');
Route::get('authorize/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('auth.social.callback');

Route::layout('layouts.auth')->section('body')->prefix('auth')->middleware('guest')->group(function () {
    $accountRoutes = [
        '/signin' => 'auth.signin',
        '/signup' => 'auth.signup',
        '/forgot-password' => 'auth.forgot-password',
    ];

    foreach ($accountRoutes as $path => $name) {
        Route::livewire($path, $name)->name($name);
    }
});

Route::layout('layouts.app')->section('body')->group(function () {
    Route::prefix('account')->middleware('auth')->group(function () {
        $accountRoutes = [
            '/'              => 'account.dashboard',
            '/collections'   => 'account.collections',
            '/organizations' => 'account.organizations',
            '/stars'         => 'account.stars',
            '/settings'      => 'account.settings',
        ];

        foreach ($accountRoutes as $path => $name) {
            Route::livewire($path, $name)->name($name);
        }
    });

    $mainRoutes = [
        '/'         => 'home',
        '/trending' => 'trending',
        '/faq'      => 'faq',
        '/contact'  => 'contact',
        '/support'  => 'support',
        '/{id}'     => 'profile',
    ];

    foreach ($mainRoutes as $path => $name) {
        Route::livewire($path, $name)->name($name);
    }
});
