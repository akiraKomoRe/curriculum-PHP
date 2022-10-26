<?php
$fruits = ["apple" => 150, "orange" => 50, "peach" => 300];
$fruitsPiece = [2, 3, 10];
function fruitsValue($price, $piece){
  $value = $price * $piece;
  return $value;
};

foreach($fruits as $key => $value) {
  $value = fruitsValue($value, $fruitsPiece);
  echo "${key}は${value}です";
}
?>