<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(
    function(){
        Route::get('users',function(){return 'Users';})->name('users');
        Route::get('posts',function(){return 'Posts';})->name('posts');
        Route::get('profile',function(){return 'Profile';})->name('profile');
        Route::get('comments',function(){return 'Comments';})->name('comments');
        Route::get('category',function(){return 'Category';})->name('category');
        Route::get('product',function(){return 'Product';})->name('product');
        Route::get('setting',function(){return 'Profile';})->name('setting');
        Route::get('about-us',function(){return 'Comments';})->name('about');
        Route::get('tabels',function(){return 'Category';})->name('tabels');
        Route::get('sub-products',function(){return 'Product';})->name('sub-products');
    }
);