<?php

function plus($a, $b) {
  $c = $a + $b;

  return $c;
}

function minus($a, $b) {
  $c = $a - $b;

  return $c;
}

function multiplication($a, $b) {
  $c = $a * $b;

  return $c;
}

function division($a, $b) {
  $c = $a / $b;

  return $c;
}

function factorial($a) {
  $b = 1;

  for ($i = 1; $i < $a; $i++) {
    $b *= ($i+1);
  }

  return $b;
}

var_dump('plus: ' . plus(16, 10));
var_dump('minus: ' . minus(16, 10));
var_dump('multiplication: ' . multiplication(16, 10));
var_dump('division: ' . division(16, 10));
var_dump('factorial: ' . factorial(4));
var_dump('cos: ' . cos(deg2rad(10)));
var_dump('sin: ' . sin(deg2rad(10)));
var_dump('tan: ' . tan(deg2rad(10)));
var_dump('sinh: ' . sinh(deg2rad(10)));
var_dump('cosh: ' . cosh(deg2rad(10)));
var_dump('tanh: ' . tanh(deg2rad(10)));