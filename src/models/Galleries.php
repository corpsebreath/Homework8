<?php

namespace src\models;

class Galleries extends Model
{
    protected string $tableName = 'galleries';
    protected array $fieldList = [
        'title',
        'description',
        'author_id',
    ];
    protected string $primaryKey = 'gallery_id';
}