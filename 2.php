<?php
$numbers = [1, 2, 9, 8, 0, 4, 2, 3, 7, 5];
rsort($numbers);
$count = 0;
$previous = null;
$third_max;
foreach ($numbers as $number) {
  if ($number !== $previous) {
    $count++;
    if ($count === 3) {
      $third_max = $number;
      break; 
    }
    $previous = $number;
  }
}
  echo "Третье максимальное число: " . $third_max . PHP_EOL;