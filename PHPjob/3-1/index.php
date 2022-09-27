<?php
  for($num=1;$num<=100;$num++) {
    if($num%3 === 0 && $num%5===0) {
      echo "FizzBuzz!";
      echo '<br>';
    } elseif($num%5 === 0) {
      echo "Buzz!";
      echo '<br>';
    } elseif($num%3 === 0) {
      echo "Fizz!";
      echo '<br>';
    } else {
      echo $num;
      echo '<br>';
    }
  }
?>

