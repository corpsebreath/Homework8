<?php

namespace src\orm;

final class Delete extends Sql implements Query
{
    private string $tableName = '';
    
    public function buildQuery() : string
    {
        return 'DELETE FROM' . $this->tableName;
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

    public function getData() : array
    {
        return $this->statement->fetchAll($this->connect::FETCH_ASSOC);
    }
}