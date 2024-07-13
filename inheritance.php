<?php
class Animals{
    private $color;
    private $name;
    public function __construct($color, $name){
       $this->color = $color;
       $this->name = $name;
    }
    public function data (){
    echo "***Animal name is ".$this->name." and its color is ".$this->color;
    }
}
class Pets extends Animals{
    public function msg (){
        echo "***this is class pet";
    }
}
$ani1 = new Pets("white","Rabbit");
$ani1->data();
$ani1->msg();
