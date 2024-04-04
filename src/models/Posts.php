<?php

namespace src\models;

class Posts extends Model
{
    protected array $model = [
        [
            'id'    => 1,
            'name'  => 'Test post1'
        ]
    ];

    protected array $models = [
        [
            'id'    => 1,
            'name'  => 'Test post1'
        ],
        [
            'id'    => 2,
            'name'  => 'Test post2'
        ],
    ];
}