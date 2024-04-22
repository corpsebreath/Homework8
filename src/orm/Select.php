<?php

namespace src\orm;

final class Select extends Sql implements Query
{
    private string $fields = '*';

    public function buildQuery() : string
    {
        $sql = 'SELECT ' . $this->fields . ' FROM ' . $this->tableName;
        if (!empty($this->where)) {
            $sql .= $this->where;
        }
        return $sql;
    }

    public function setFields(string|array $fields) : void
    {
        if (is_array($fields)) {
            $this->fields = implode(",", $fields);
        } else {
            $this->fields = $fields;
        }

    }

    public function getData() : array
    {
        return $this->statement->fetchAll($this->connect::FETCH_ASSOC);
    }
}