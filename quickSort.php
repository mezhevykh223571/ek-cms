<?php
$arr = [50, 13, 48, 51, 30, 45, 15, 78, 63, 127, 142];

function quickSort($arr) {
  $length = count($arr);

  if ($length >= 1) {
    $getFirstEl = $arr[0]; // Get first el in array
    $left = $right = [];

    for ($i = 1; $i < count($arr); $i++) {
      if ($arr[$i] < $getFirstEl) {
        $left[] = $arr[$i];
      } else {
        $right[] = $arr[$i];
      }
    }

    $getFirstEl = [$getFirstEl];

    $left = quickSort($left);
    $right = quickSort($right);

    $leftArr = customArrMerge($left, $getFirstEl);
    $rightArr = customArrMerge($leftArr, $right);

    return $rightArr;
  }

  return $arr;
}

function customArrMerge($arr, $arrToMerge) {
  foreach ($arrToMerge as $key => $value) {
    $arr[] = $arrToMerge[$key];
  }
  return $arr;

}

$sortedArr = quickSort($arr);
var_dump($sortedArr);
