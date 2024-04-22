<?php

namespace src\models;
use src\orm\Delete;
use src\orm\Insert;
use src\orm\Select;

abstract class Model
{
    public function findOne(int $id) : array
    {
        return $this->model;
    }

    public function findAll() : array
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->execute();
        return $select->getData();
    }

    public function insert(array $data) : void
    {
        $insert = new Insert();
        $insert->setTableName($this->tableName);
        $insert->setFields($this->getFields($data));
        $insert->setValues($this->getValues($data));
        $insert->execute();
    }

    public function delete(int $id) : void
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $delete->andWhere([['eq' , $this->primaryKey, $id]]);
        $delete->execute();
    }

    private function getFields(array $data) : array
    {
        $fields = array_keys($data);
        if (!empty($this->fieldList)) {
            $fields = array_intersect($this->fieldList, $fields);
        }
        return $fields;
    }

    private function getValues(array $data) : array
    {
        $result = [];
        $fields = array_keys($data);
        if (!empty($this->fieldList)) {
            $fields = array_intersect($this->fieldList, $fields);
        }
        foreach ($fields as $field) {
            $result[] = $data[$field];
        }
        return $result;
    }
}