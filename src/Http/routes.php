<?php

Route::group([
    'namespace'  => 'Brandon\Seat\Organizer\Http\Controllers'
], function () { // Group through web to use grid layouts
    Route::group(['middleware' => 'web'], function () {
        Route::group([
            'middleware' => 'bouncer:queue_manager',
            'prefix'     => 'organizer'
        ], function () {
            Route::get('/', [
                'as'   => 'organizer.list',
                'uses' => 'OrganizeController@getOrganize'
            ]);
        });
    });
});