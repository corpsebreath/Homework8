<?php

namespace src\orm;

final class Delete extends Sql implements Query
{
    public function buildQuery() : string
    {
        $sql = 'DELETE FROM ' . $this->tableName;
        if (!empty($this->where)) {
            $sql .= $this->where;
        }
        var_dump($sql);
        return $sql;
    }

}