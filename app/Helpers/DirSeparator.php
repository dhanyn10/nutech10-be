<?php
namespace App\Helpers;

class DirSeparator{
    public static function dir($value){
        $result = null;
        if(DIRECTORY_SEPARATOR == "\\")
        {
            $result = str_replace("\\", "/", $value);
        }
        return $result;
    }
}
?>