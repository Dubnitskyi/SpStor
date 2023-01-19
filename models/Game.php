<?php 

namespace models;

use core\Utils;
use core\Core;
class Game
{
  protected static $tableName = 'games';

  public static function addGame($name ,$categorie_id,$price, $short_text, $visible, $photoPath){

    do {
      $fileName = uniqid() . '.png';
      $newPath = "files/game/{$fileName}";
    } while (file_exists($newPath));
    
    move_uploaded_file($photoPath,$newPath);
    Core::getInstance()->db->insert(self::$tableName,[
      'name' => $name,
      'photo' => $fileName,
      'categorie_id' =>$categorie_id,
      'price' => $price,
      'short_text' => $short_text,
      'visible' => $visible
    ]);
  }
  public static function deleteGame($id){
    Core::getInstance()->db->delete(self::$tableName,[
      'id' => $id
    ]);
  }

  public static function updateGame($id,$row){
    $fieldList = ['name','categorie_id','price','short_text','visible'];
    $row = Utils::filterArray($row,$fieldList);
    Core::getInstance()->db->update(self::$tableName,$row,[
      'id' => $id
    ]);
  }

  public static function getGameId($id){
    $row = Core::getInstance()->db->select(self::$tableName,'*',[
      'id' => $id
    ]);
      return $row[0];
  }

  public static function getGameInCat($categorie_id){
    $row = Core::getInstance()->db->select(self::$tableName,'*',[
      'categorie_id' => $categorie_id
    ]);
    return $row;
  }
  public static function getAllGames(){
    $rows = Core::getInstance()->db->select(self::$tableName);
    return $rows;
  }
}