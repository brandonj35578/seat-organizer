<?php

Route::group([
    'namespace'  => 'Brandon\Seat\Organizer\Http\Controllers',
    'prefix'     => 'organizer',
], function () {
    Route::group([
        'middleware' => ['web'],
    ], function () {
        Route::get('/', [
            'as'   => 'organizer.list',
            'uses' => 'OrganizeController@getOrganize'
        ]);
    });
});