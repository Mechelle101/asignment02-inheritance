<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0; 
  protected $wheels = 2;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  //this uses a turnery operator to return a string specifying how many wheels there are
  //if(wheels == 1) {"1 wheel"} else {$this->wheels . " wheels"}; 
  //then returns the number of wheels it has
  public function wheel_details() {
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has " . $wheel_string . ".";
  }

  //getter function for the private property weight_kg
  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

  //setter function for the private property weight_kg
  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . ' lbs';
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

$uni = new Unicycle;

echo "Bicycle: " . $trek->wheel_details() . "<br>";
echo "Unicycle: " . $uni->wheel_details() . "<br>";
echo "<hr>";

echo "Setting the weight using kg <br>";
$trek->set_weight_kg(1);
echo $trek->weight_kg() . "<br>";
echo $trek->weight_lbs() . "<br>";
echo "<hr>";

echo "Setting the weight using lbs <br>";
$trek->set_weight_lbs(2);
echo $trek->weight_kg() . "<br>";
echo $trek->weight_lbs() . "<br>";
echo "<hr>";

echo "Set weight for Unicycle <br>";
$uni->set_weight_kg(1);
echo $uni->weight_kg() . "<br>";
echo $uni->weight_lbs() . "<br>";


?>
