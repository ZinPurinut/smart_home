<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['categories' => config('categories')]);
})->name('home');

// หน้า Company Profile ถูกรวมเป็นหน้าแรกตามคอนเซ็ปต์ "Smart Living Architect"
Route::redirect('/company', '/')->name('company');

Route::get('/dealer', function () {
    return view('dealer', ['categories' => config('categories')]);
})->name('dealer');

Route::get('/training', function () {
    return view('training');
})->name('training');

// Shell page Product — รอทีมงานทยอยลงสินค้าแต่ละหมวด
Route::get('/products/{slug}', function (string $slug) {
    $categories = config('categories');
    abort_unless(isset($categories[$slug]), 404);

    return view('category', [
        'slug'       => $slug,
        'category'   => $categories[$slug],
        'categories' => $categories,
    ]);
})->name('category');
