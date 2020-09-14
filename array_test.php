<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo '<br/>';
echo count($cars);
echo '<br/>';

$arr_length=count($cars);

for($x=0;$x<$arr_length;$x++)
{
    echo $cars[$x];
    echo "<br>";
}