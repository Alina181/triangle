<?php
function calculateTriangle($point1, $point2, $point3) {
    // Расчет длин сторон треугольника
    $side1 = sqrt(pow($point2[0] - $point1[0], 2) + pow($point2[1] - $point1[1], 2) + pow($point2[2] - $point1[2], 2));
    $side2 = sqrt(pow($point3[0] - $point2[0], 2) + pow($point3[1] - $point2[1], 2) + pow($point3[2] - $point2[2], 2));
    $side3 = sqrt(pow($point1[0] - $point3[0], 2) + pow($point1[1] - $point3[1], 2) + pow($point1[2] - $point3[2], 2));

    // Расчет углов треугольника
    $angle1 = rad2deg(acos(($side1*$side1 + $side3*$side3 - $side2*$side2) / (2 * $side1 * $side3)));
    $angle2 = rad2deg(acos(($side1*$side1 + $side2*$side2 - $side3*$side3) / (2 * $side1 * $side2)));
    $angle3 = 180 - $angle1 - $angle2;

    // Расчет площади треугольника по формуле Герона
    $halfPerimeter = ($side1 + $side2 + $side3) / 2;
    $area = sqrt($halfPerimeter * ($halfPerimeter - $side1) * ($halfPerimeter - $side2) * ($halfPerimeter - $side3));

    // Вывод результатов
    $output = "Угол 1: " . $angle1 . " градусов" . PHP_EOL;
    $output .= "Угол 2: " . $angle2 . " градусов" . PHP_EOL;
    $output .= "Угол 3: " . $angle3 . " градусов" . PHP_EOL;
    $output .= "Площадь треугольника: " . $area . PHP_EOL;
    $output .= "Длина первой стороны: " . $side1 . PHP_EOL;
    $output .= "Длина второй стороны: " . $side2 . PHP_EOL;
    $output .= "Длина третьей стороны: " . $side3 . PHP_EOL;

    return $output;
}

// Пример использования функции
$point1 = [0, 0, 0];
$point2 = [3, 0, 0];
$point3 = [0, 4, 0];

$result = calculateTriangle($point1, $point2, $point3);
echo $result;
?>