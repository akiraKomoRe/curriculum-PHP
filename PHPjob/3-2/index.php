<?php
$fruitsPrice = ["apple" => 150, "orange" => 50, "peach" => 300];
$fruitsPiece = [2, 3, 10];
function furuitsValue($unit, $quantity) {
  $price = $unit * $quantity;
  return $price;
}


$i = 0;
foreach($fruitsPrice as $key => $value) {
  $total = furuitsValue($value, $fruitsPiece[$i]);
  echo $key."は".$total."円です";
  $i++;
  echo "<br />";
}
?>