<?php
$students = [
    ['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5]],
    ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2]],
    ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 5]],
];
$result = [];
foreach ($students as $student) {
    $grades = $student['grades'];
    $sredn = array_sum($grades) / count($grades);

    if ($sredn >= 4) {
        $result[$student['name']] = round($sredn, 2);
    }
}
$output = '';
foreach ($result as $name => $sredn) {
    $output .= $name . ': ' . $sredn . ' ';
}
echo trim($output);