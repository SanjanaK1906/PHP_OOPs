class Animals{
    private $color;  //data members
    private $name;   
    public function __construct($color, $name){
       $this->color = $color;
       $this->name = $name;
    } // member function
    public function data (){
    echo "Animal name is ".$this->name." and its color is ".$this->color;
    }
}
$ani1 = new Animals("white","Rabbit");
$ani1->data();


