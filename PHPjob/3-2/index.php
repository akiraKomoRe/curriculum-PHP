<?php
$fruitsPrice = ["apple" => 150, "orange" => 50, "peach" => 300];
$fruitsPiece = [2, 3, 10];
function furuitsValue($unit, $quantity) {
  $price = $unit * $quantity;
  return $price;
}


foreach($fruitsPrice as $key => $value) {
  $i = 0;
  $total = furuitsValue($value, $fruitsPiece[$i]);
  echo $key."は".$total."円です";
  $i++;
  echo "<br />";
}
?>