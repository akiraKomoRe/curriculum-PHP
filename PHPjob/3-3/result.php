<?php 
  $number = $_POST['number'];
  $array = str_split($number);
  $key = array_rand($array,1);
  $rand_num = $array[$key];

  if($rand_num == 0) {
    $ruck = "凶";
  } else if($rand_num <= 3) {
    $ruck = "小吉";
  } else if($rand_num <= 6) {
    $ruck = "中吉";
  } else if($rand_num <= 8) {
    $ruck = "吉";
  } else {
    $ruck = "大吉";
  }

  echo date("Y/m/d",time())."の運勢は";
  echo "<br />";
  echo "選ばれた数字は".$rand_num;
  echo "<br />";
  echo $ruck;
?>