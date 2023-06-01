<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/login', function () {
    return view('admin/index');
});

Route::prefix('/admin')->group(function () {
    Route::get('', function () {
        return view('admin/admin');
    })->name('admin');

    Route::get('/user', function () {
        return view('admin/tab/user');
    })->name('admin.user');

    Route::get('/category', function () {
        return view('admin/tab/category');
    })->name('admin.category');

    Route::get('/product', function () {
        return view('admin/tab/product');
    })->name('admin.product');

    Route::get('/contact', function () {
        return view('admin/tab/contact');
    })->name('admin.contact');
});

Route::post('/admin/user/add', [UserController::class, 'add_user'] )->name('admin.add-user');

Route::post('/admin/category/add', [CategoryController::class,'add_category'] )->name('admin.category.add');

Route::get('/toacambodia', function () {
    return view('index');
})->name('home-page');

Route::prefix('/toacambodia/en')->group(function () {
    Route::get('/product', function () {
        return view('home/product');
    })->name('product');

    Route::get('/distributor', function () {
        return view('home/distributor');
    })->name('distributor');
    
    Route::get('/videos', function () {
        return view('home/videos');
    })->name('videos');
    
    Route::get('/knowledge', function () {
        return view('home/knowledge');
    })->name('knowledge');
    
    Route::get('/jobs', function () {
        return view('home/jobs');
    })->name('jobs');
    
    Route::get('/project-refference', function () {
        return view('home/project-refference');
    })->name('project-refference');
    
    Route::get('/contact-us', function () {
        return view('home/contact-us');
    })->name('contact-us');

    Route::get('/product-detail', function () {
        return view('home/pro-detail');
    })->name('product-detail');

    Route::get('/my-toa', function () {
        return view('home/my-toa');
    })->name('my-toa');

    Route::get('/order', function () {
        return view('home/order');
    })->name('order');
});