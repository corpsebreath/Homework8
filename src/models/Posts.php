<?php

namespace src\models;

class Posts extends Model
{
    protected string $tableName = 'posts';
    protected array $fieldList = [
        'author_id',
        'title',
        'content',
    ];
    protected string $primaryKey = 'post_id';
}