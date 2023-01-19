<?php 

namespace models;
use core\Core;

class Library
{
  protected static $tableName = 'library';
  public static function addGame($user_id,$game_id){
    Core::getInstance()->db->insert(self::$tableName,[
      'user_id' => $user_id,
      'game_id' => $game_id
    ]);
  }

  public static function getAllGame(){
    $rows = Core::getInstance()->db->select(self::$tableName);
    return $rows;
  }

  public static function getGame($id){
    $row = Core::getInstance()->db->select(self::$tableName,'*',[
      'user_id' => $id,
    ]);
      return $row;
  }
  
}