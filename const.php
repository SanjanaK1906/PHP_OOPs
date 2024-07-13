<?php
class Animals{
    const msg = "Animal family";
    public function display(){
        echo "---display data---";
        echo self::msg; //within class
    }
}
echo Animals::msg ."\n";  //outside class

$disp= new Animals();
$disp->display();
?>
