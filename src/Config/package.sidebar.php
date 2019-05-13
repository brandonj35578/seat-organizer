<?php

return [

    'organizer' => [
        'name'          => 'organizer',
        'label'         => 'Organisation',
        'icon'          => 'fa-sitemap',
        'route_segment' => 'organizer',
        'entries'       => [
            [
                'name'  => 'organizer',
                'label' => 'Corp Organisation',
                'icon'  => 'fa-envelope-square',
                'route' => 'organizer.list',
            ]
        ],
    ],

];
