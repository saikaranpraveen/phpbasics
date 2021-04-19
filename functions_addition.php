<!DOCTYPE html>
<html>
<body>

<?php
function addition(int $a, int $b) {
  $c = $a + $b;
  return $c;
}

echo "2 + 4 = " . addition(2,4) . "<br>";
echo "8 + 1 = " . addition(8,1) . "<br>";
echo "25 + 48 = " . addition(25,48);
?>

</body>
</html>
