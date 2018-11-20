<?php

// 販売者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'Seller\UserController@index');

    // ユーザ情報変更
    Route::get('edit', 'Seller\UserController@edit');
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'Seller\ProductsController@index');

    // 商品詳細
    Route::get('detail', 'Seller\ProductsController@detail');
});

// 納品系
Route::prefix('delivery')->group(function () {
    // 未納品一覧
    Route::get('yet', 'Seller\DeliveryController@yet');

    // 納品済一覧
    Route::get('done', 'Seller\DeliveryController@done');
});