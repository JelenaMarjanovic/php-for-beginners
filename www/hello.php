<?php

// if (true) {
//   echo "The condition is true.";
// }

// if (false) {
//   echo "The condition is true.";
// }

// $articles = [];
// $articles = ["JavaScript", "Java", "PHP"];

// var_dump(empty($articles));

// if (empty($articles)) {
//   echo "The array is empty.";
// } else {
//   echo "The array is not empty.";
// }

// var_dump(3 == 4);
// var_dump(4 == 4);

// $age = 21;
// $age = 18;

// if ($age == 21) {  // 21 - true
// if ($age != 21) {  // 21 - false
// if ($age < 21) {  // 18 - true
// if ($age > 21) {  // 21 - false
// if ($age >= 21) {  // 21 - true
//   echo "Condition is true";
// } else {
//   echo "Condition is false";
// }

// $month = 1;

// while ($month <= 12) {
//   echo $month . ", ";
//   $month = $month + 1;
// }

// for ($i = 1; $i <= 10; $i = $i + 1) {
// for ($i = 1; $i <= 10; $i += 1) {
// for ($i = 1; $i <= 10; $i++) {
//   echo $i . ", ";
// }

// $hour = 11;
// $hour = 14;
// $hour = 20;
$hour = 23;

if ($hour < 12) { // 11 - true, 14 - false, 20 - false, 23 - false
  echo "Good morning";
} elseif ($hour < 18) {  // 11 - false, 14 - true, 20 - false, 23 - false
  echo "Good afternoon";
} elseif ($hour < 22) {  // 11 - false, 14 - false, 20 - true, 23 - false
  echo "Good evening";
} else {  // 11 - false, 14 - false, 20 - false, 23 - true
  echo "Good night";
}
