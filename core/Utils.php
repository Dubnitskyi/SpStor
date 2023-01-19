<?php

namespace core;

class Utils
{
    public static function filterArray($array,$fieldsList){
        $newArray = [];

        foreach($array as $key => $value)
            if(in_array($key,$fieldsList))
                $newArray[$key] = $value;
        return $newArray;
    }
}