<?php

namespace models;

use core\Utils;

class User
{
    protected static $tableName = 'user';
    public static function addUser($login,$password,$nick_name){
        \core\Core::getInstance()->db->insert(
            self::$tableName,[
                'login' => $login,
                'password' =>self::hashPassword($password),
                'nick_name' => $nick_name
            ]
            );
    }

    public static function upDateUser($id, $upDateArray){
        $upDateArray = Utils::filterArray($upDateArray, ['nick_name']);
        \core\Core::getInstance()->db->update(self::$tableName,$upDateArray,
        [
            'id' => $id
        ]);
    }

    public static function isLoginExists($login){
        $user = \core\Core::getInstance()->db->select(self::$tableName, '*',[
            'login' => $login
        ]);
        return !empty($user);
    }

    public static function verifyUser($login,$password){
        $user = \core\Core::getInstance()->db->select(self::$tableName, '*',[
            'login' => $login,
            'password' => $password
        ]);
        return !empty($user);
    }

    public static function getUser($login,$password){
        $user = \core\Core::getInstance()->db->select(self::$tableName, '*',[
            'login' => $login,
            'password' =>self::hashPassword($password)
        ]);
        if(!empty($user))
        return $user[0];
        return null;
    }

    public static function autUser($user){
        $_SESSION['user'] = $user;
    }

    public static function logoutUser(){
        unset($_SESSION['user']);
    }

    public static function IsAutUser(){
        return isset($_SESSION['user']);
    }

    public static function getCurAutUser(){
        return $_SESSION['user'];
    }

    public static function isAdmin(){
        $user = self::getCurAutUser();
        return $user['level'] == 1;
    }
    public static function hashPassword($password){
        return md5($password);
    }
}