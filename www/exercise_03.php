<?php

$array = [];

for ($i = 1; $i <= 10; $i++) {
  // if ($i < 4) {
  //   $array[$i] = "a";
  // } elseif ($i >= 4 && $i <= 7) {
  //   $array[$i] = "b";
  // } elseif ($i >= 8) {
  //   $array[$i] = "c";
  // }

  switch ($i) {
    case $i < 4:
      $array[] = "a";
      break;
    case $i <= 7:
      $array[] = "b";
      break;
    default:
      $array[] = "c";
      break;
  }
}
