<?php
trait msg1{
    public function intro1(){
        echo "this is messgage 1 \n";
    }
}
trait msg2{
    public function intro2(){
        echo "this is messgage 2 \n";
    }
}

class message1{
    use msg1; //single trait
}
class message{
    use msg1, msg2; //multiple trait
}

$msg1 = new message1;
$msg1->intro1();
echo"---------------- \n";
$msg2 = new message;
$msg2->intro1();
$msg2->intro2();
?>
