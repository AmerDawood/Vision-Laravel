<?php

use Illuminate\Support\Facades\Route;


Route::prefix('customer')->name('customer.')->group(
    function(){
        Route::get('profile',function(){return 'profile';})->name('profile');
        Route::get('posts',function(){return 'posts';})->name('posts');
        Route::get('comments',function(){return 'comments';})->name('comments');
        Route::get('followers',function(){return 'followers';})->name('followers');
        Route::get('settings',function(){return 'settings';})->name('settings');
    }
);