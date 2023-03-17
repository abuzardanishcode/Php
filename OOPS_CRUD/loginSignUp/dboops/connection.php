<?php
class mobile{
   public $model;

   function showModel($num){
    $this->model=$num;
    echo "Model number is : $this->model <br>";

   }
}

$sumsung= new mobile;

$sumsung->showModel("Galaxy");

$lg= new Mobile;
$lg->showModel("lg64");






?>