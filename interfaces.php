<?php
interface Animals{
    public function intro();
}
class Cat implements Animals{
    public function intro(){
        return "This is Cat..";
    }
}

$cat = new Cat();
echo $cat->intro();
?>
