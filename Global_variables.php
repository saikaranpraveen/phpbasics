<html>
<body>
<?php
$a = 5;
$b = 10;

function my_test_one()
{
global $a, $b;
$b = $a + $b;
} 

my_test_one();
echo $b;

function my_test_two()
{
$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

my_test_two();
echo $b;
?>

</body>
</html>