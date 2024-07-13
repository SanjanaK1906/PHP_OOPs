<?php
abstract class Animals{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    abstract public function intro():string;
}
class Cat extends Animals{
    public function intro():string{
        return "Animal name is ".$this->name." and its color is ".$this->color."\n";
    }
}
class Tiger extends Animals{
    public function intro():string{
        return "Animal name is ".$this->name." and its color is ".$this->color."\n";
    }
}

$cat = new Cat("cat","brown");
echo $cat->intro();
$tiger = new Tiger("Tiger","yellow");
echo $tiger->intro();
?>
