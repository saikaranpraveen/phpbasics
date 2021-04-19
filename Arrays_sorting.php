<!DOCTYPE html>
<html>
<body>

<?php
$jersey_number = array("Dhoni"=>"7", "Tendulkar"=>"10", "Fabregas"=>"23");
asort($jersey_number);

foreach($jersey_number as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>
