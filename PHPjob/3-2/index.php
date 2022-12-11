<?php

$fruits = ["りんご" => 50, "みかん" => 50, "もも" => 100];
$piece = [6, 3, 30];

function furuitsValue($unit, $quantity) {
  $price = $unit * $quantity;
  return $price;
}

$i = 0;

foreach($fruits as $key => $value) {
  $total = furuitsValue($value, $piece[$i]);
  echo $key."は".$total."円です。";
  $i ++;
  echo "<br />";
}
?>