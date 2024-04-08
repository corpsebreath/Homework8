<?php

namespace src\core;


class Viewer
{
    public static function view(string $section, string $name, array $data = []) : void
    {
        extract($data);
        include_once __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR.$section.DIRECTORY_SEPARATOR.$name.".php";

    }
}