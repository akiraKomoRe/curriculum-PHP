<?php

$fruits = ["apple" => 200, "orange" => 50, "peach" => 600];
$piece = [20, 100, 1000];

function furuitsValue($unit, $quantity) {
  $price = $unit * $quantity;
  return $price;
}

foreach($fruits as $key => $value) {
  $i = 0;
  $total = furuitsValue($value, $piece[$i]);
  echo $key."は".$total."円です";
  $i++;
  echo "<br />";
}

?>