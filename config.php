<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Andrés Smerkin',
    'description' => 'Website description.',
    'avatar' => 'e51e26e998269c10eb92bf36e9cd61d5',
    'collections' => [
        'articles' => [
            'path' => 'blog/{filename}',
            'author' => 'Andrés Smerkin',
            'extends' => '_layouts.article'
        ]
    ],
];
