<?php

  $message = "Hello";
  $name = "Dave";

  $count = 10;
  $size = 2;

  $price = 2.95;
  $quantity = 5;
  $price_string = "75";

  $is_editor = true;
  $is_admin = false;

  $greeting = 'Hello';
  $person = "Dave";

  $start = "3 o'clock";
  $end = '4 o\'clock';

  $days = "\nMonday\nTuesday\nWednesday\n";

  // $is_admin = true;
  // $data = null;

  // var_dump($message);
  // var_dump($count);
  // var_dump($price);

  // var_dump($is_admin, $data);

  var_dump($count + 5);
  var_dump($count * $size);

  var_dump($price * $quantity);
  var_dump($price_string * $quantity);

  echo $message . " " . $name;

  var_dump(! $is_editor);
  var_dump($is_editor or $is_admin);
  var_dump($is_admin and $is_editor);

  echo $start, " ", $end;
  echo $days;
  echo "Hello, " . $person;
  echo "Hello, $person";
  echo "Hello {$person}";

?>