<?php 

$height = 5;
$base = 3;
$radius = 6;
$pi = 3.14159;

$triangle = ($height*$base)/2;

$circle = $pi * (pow($radius,2));

echo "Triangle area = " . $triangle;
echo "<br>";
echo "Circle area = " .  $circle;
