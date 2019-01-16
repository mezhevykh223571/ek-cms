<?php
$arr = [50, 12, 48, 51, 30, 45, 15, 78, 63, 127, 123, 141, 130, 135];

function quickSort($arr) {
  $length = count($arr);

  if ($length >= 1) {
    $getFirstEl = $arr[0]; // Get first el in array
    $left = $right = [];
    $iMax = count($arr);

    for ($i = 1; $i < $iMax; $i++) {
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
