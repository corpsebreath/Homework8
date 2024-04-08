<?php

namespace src\models;

class Users extends Model
{
    protected array $model = [
        [
            'id'    => 1,
            'name'  => 'Test user1'
        ]
    ];

    protected array $models = [
        [
            'id'    => 1,
            'name'  => 'Test user1'
        ],
        [
            'id'    => 2,
            'name'  => 'Test user2'
        ],
    ];
}