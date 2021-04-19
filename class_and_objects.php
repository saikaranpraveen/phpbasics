<!DOCTYPE html>
<html>
<body>

<?php
class Vehicle {
  public $color;
  public $wheels;
  public function __construct($color, $wheels) {
    $this->color = $color;
    $this->wheels = $wheels;
  }
  public function message() {
    return "The vehicle is " . $this->color . " in colour and has " . $this->wheels . " wheels!";
  }
}

$myCar = new Vehicle("black", "4");
echo $myCar -> message();
echo "<br>";
?>

</body>
</html>
