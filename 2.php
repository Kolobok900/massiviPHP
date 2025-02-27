<?php
$numbers = [1, 2, 3, 8, 9, 4, 2, 3, 9, 9];
$unique_numbers = array_unique($numbers);
arsort($unique_numbers);
if (count($unique_numbers) >= 3) {
  $keys = array_keys($unique_numbers);
  $third_max_key = $keys[1]; 
  $third_max = $unique_numbers[$third_max_key];

  echo "Третье максимальное число: " . $third_max . PHP_EOL;
}