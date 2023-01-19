<?php

namespace core;

class DB
{
    protected $pdo;
    public function __construct($hostname,$login,$password,$database){
        $this->pdo = new \PDO("mysql: host={$hostname};dbname={$database}",$login,$password);
    }

    public function select($tableName,$fieldslist = "*",$conditionArray = null)
    {
        if (is_string($fieldslist)) {
            $fieldslistString = $fieldslist;
        }
        if (is_array($fieldslist)) {
            $fieldslistString = implode(', ', $fieldslist);
        }
        $wherePartString = "";
        if(is_array($conditionArray)){
            $parts = [];
            foreach($conditionArray as $key => $value){
                $parts[] = "{$key} = :{$key}";
            }
            $wherePartString = "WHERE ".implode(' AND ',$parts);
        }
        $res = $this->pdo->prepare("SELECT {$fieldslistString} FROM {$tableName} {$wherePartString}");
        $res->execute($conditionArray);
        return $res ->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function update($tableName,$newValueArray,$conditionArray){

        $setParts = [];
        $paramsArray = [];
        foreach ($newValueArray as $key => $value) {
            $setParts [] = "{$key} = :set{$key}";
            $paramsArray['set'.$key] = $value;
        }
        $setPartString = implode(', ', $setParts);
        $whereParts = [];
        foreach ($conditionArray as $key => $value) {
            $whereParts [] = "{$key} = :{$key}";
            $paramsArray[$key] = $value;
        }
        $wherePartString = "WHERE ".implode(' AND ', $whereParts);
             
        $res = $this->pdo->prepare("UPDATE {$tableName} SET {$setPartString} {$wherePartString}");
        $res->execute($paramsArray);
    }

    public function insert($tableName, $newRowArray){
        $fieldsArray = array_keys($newRowArray);
        $fieldsListString = implode(', ',$fieldsArray);
        $paramsArray = [];
        foreach($newRowArray as $key => $value){
            $paramsArray [] = ':'.$key;
        }
        $valuesListString = implode(', ', $paramsArray);
        $res = $this->pdo->prepare("INSERT INTO {$tableName} ($fieldsListString) VALUE ($valuesListString)");
        $res->execute($newRowArray);
    }

    public function delete($tableName, $conditionArray){

        $whereParts = [];
        foreach ($conditionArray as $key => $value) {
            $whereParts [] = "{$key} = :{$key}";
            $paramsArray[$key] = $value;
        }
        $wherePartString = "WHERE ".implode(' AND ', $whereParts);
        $res = $this->pdo->prepare("DELETE FROM {$tableName} {$wherePartString}");
        $res->execute($conditionArray);
    }
}