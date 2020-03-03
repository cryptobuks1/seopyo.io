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

Route::layout('layouts.base')->section('body')->group(function () {
    $mainRoutes = [
        '/'         => 'home',
        '/trending' => 'trending',
        '/{id}'     => 'profile',
        '/faq'      => 'faq',
        '/contact'  => 'contact',
        '/support'  => 'support',
    ];

    foreach ($mainRoutes as $path => $name) {
        Route::livewire($path, $name)->name($name);
    }

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
});
