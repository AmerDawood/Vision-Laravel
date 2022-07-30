<?php

use Illuminate\Support\Facades\Route;


Route::prefix('user')->name('user.')->group(
    function(){
        Route::get('profile',function(){return 'Users';})->name('profile');
        Route::get('posts',function(){return 'Posts';})->name('posts');
        Route::get('comments',function(){return 'Comments';})->name('comments');
        Route::get('category',function(){return 'Category';})->name('category');
        Route::get('settings',function(){return 'settings';})->name('settings');
    }
);