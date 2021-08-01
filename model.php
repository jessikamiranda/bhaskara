<?php

$a = filter_input(INPUT_POST, 'a', FILTER_SANITIZE_NUMBER_INT);
$b = filter_input(INPUT_POST, 'b', FILTER_SANITIZE_NUMBER_INT);
$c = filter_input(INPUT_POST, 'c', FILTER_SANITIZE_NUMBER_INT);

$sql = "INSERT INTO 'tb_valores'(a, b, c) VALUES ('$a', '$b', '$c')";

function delta($a, $b, $c) {
    return ($b * $b) - 4 * $a * $c;
}

if (delta($a, $b, $c) < 0) {
    $result = 'O valor não pode ser calculado pois o delta é negativo.';
}
else {
    $delta = delta($a, $b, $c);
    $x1 = (-$b + (sqrt(delta($a, $b, $c)))) / 2 * $a;
    $x2 = (-$b - (sqrt(delta($a, $b, $c)))) / 2 * $a;
    $result = 'Delta: ' . $delta . "<br>X': " . $x1 . "<br>X'': " . $x2;
}
?>