<?php

namespace src\orm;

final class Select extends Sql implements Query
{
    private string $tableName = '';
    private string $fields = '*';

    public function buildQuery() : string
    {
        return 'SELECT ' . $this->fields . ' FROM ' . $this->tableName;
    }

    public function setTableName(string|array $tableName) : void
    {
        if (is_array($tableName)) {
            foreach ($tableName as $alias => $name) {
                $this->tableName = $name . ' ' . $alias;
                break;
            }
        } else {
            $tableName = $this->tableName;
        }

    }

    public function setFields(string|array $fields) : void
    {
        if (is_array($fields)) {
            $this->fields = implode(",", $fields);
        } else {
            $fields = $this->fields;
        }

    }

    public function getData() : array
    {
        return $this->statement->fetchAll($this->connect::FETCH_ASSOC);
    }
}