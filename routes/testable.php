<?php

Route::get('/ping', function () {
    return collect([
        'message' => 'Pong!'
    ]);
});

Route::prefix('api/')
    ->name('api.')
    ->group(function () {

        Route::resource('projects', 'Api\ProjectController')
            ->except([
                'create',
                'edit'
            ]);

    });

Route::get('/{any?}', 'TestableController')->where('any', '.*')
    ->name('main');
