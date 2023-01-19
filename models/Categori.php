<?php 

namespace models;

use core\Utils;
use core\Core;
class Categori
{
  protected static $tableName = 'сategorie';
  public static function addCat($CatName , $photoPath){

    do {
      $fileName = uniqid() . '.png';
      $newPath = "files/categori/{$fileName}";
    } while (file_exists($newPath));
    
    move_uploaded_file($photoPath,$newPath);
    Core::getInstance()->db->insert(self::$tableName,[
      'name' => $CatName,
      'photo' => $fileName
    ]);
  }
  public static function getCatId($id){
    $rows = Core::getInstance()->db->select(self::$tableName,'*',[
      'id' => $id
    ]);
    if(!empty($rows)){return $rows[0];}
    else return null;
  }
  public static function deleteCat($id){
    $row = Categori::getCatId($id);
    $photoPath = 'files/categori/'.$row['photo'];
    if(is_file($photoPath))
    unlink($photoPath);
    
    Core::getInstance()->db->delete(self::$tableName,[
      'id' => $id
    ]);
  }
  public static function updateCat($id,$newName){
    Core::getInstance()->db->update(self::$tableName,[
      'name' => $newName
    ],
  [
    'id' => $id
  ]);
  }
  public static function getAllCat(){
    $rows = Core::getInstance()->db->select(self::$tableName);
    return $rows;
  }
  public static function chengPhoto($id,$newPhoto){
    $row = Categori::getCatId($id);
    $photoPath = 'files/categori/'.$row['photo'];
    if(is_file($photoPath))
    unlink($photoPath);
    do {
      $fileName = uniqid() . '.png';
      $newPath = "files/categori/{$fileName}";
    } while (file_exists($newPath));
    
    move_uploaded_file($newPhoto,$newPath);
    Core::getInstance()->db->update(self::$tableName,[
      'photo' => $fileName
    ],[
      'id' => $id
    ]);
  }
}