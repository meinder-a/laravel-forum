<?php

Route::middleware(['auth'])->prefix(config('forum.route_prefix'))->group(function () {
    Route::get('/thread', [ThreadController::class, ['store', 'update', 'delete']]);
});