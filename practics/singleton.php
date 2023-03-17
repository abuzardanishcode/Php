<?php
class single{

private static $name=null;
 private  function __construct(){
        echo "connect";
    }
 public static function showInstance(){
        // echo self:: $name;
        if(self::$name==0){
            self::$name=new static();
        }else{
            echo "Already Connected";
        }
        return self::$name;
    }
}


$obj=single::showInstance();
// $obj1=single::showInstance();













?>