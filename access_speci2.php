<?php
class Vehicle {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Vehicle();
$mango->set_name('BMW'); // OK
$mango->set_color('Blue'); // ERROR
$mango->set_weight('300'); // ERROR
?>
