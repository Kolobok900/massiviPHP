<?php
$grades = [5, 3, 4, 5, 4];
$sum = 0;
foreach ($grades as $grade) {
  $sum += $grade;
}
$count = count($grades);
$sredn = $sum / $count;
echo "Средняя оценка студентов: " . $sredn;