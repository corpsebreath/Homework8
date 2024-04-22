<?php

namespace src\models;

class Users extends Model
{
    protected string $tableName = 'users';
    protected array $fieldList = [
        'first_name',
        'second_name',
        'login',
        'pass',
        'email',
    ];
    protected string $primaryKey = 'id';
}