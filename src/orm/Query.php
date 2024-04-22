<?php

namespace src\orm;

interface Query
{
    public function buildQuery() : string;
}