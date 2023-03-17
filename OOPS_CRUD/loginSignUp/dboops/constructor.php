<?php
class student{
    public $model;
 
   /*  function __construct(){
     
     echo "constructor is called";
 
    } */
    function __construct($enroll){
       $this->model=$enroll;
        echo "parametrized constructor is called ".$this->model;
    
       }
 }
 
 $sumsung= new student(10);
 
 
 
 







?>