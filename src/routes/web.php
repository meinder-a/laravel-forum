<?php

use MeinderA\LaravelForum\Controllers\PostController;
use MeinderA\LaravelForum\Controllers\ThreadController;
use MeinderA\LaravelForum\Controllers\CategoryController;

Route::prefix(config('forum.route_prefix'))->group(function () {
    Route::resources([
        'posts' => PostController::class,
        'threads' => ThreadController::class,
        'categories' => CategoryController::class,
    ], ['except' => ['edit']]);
});