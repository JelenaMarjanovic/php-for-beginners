<?php

  // $articles = ["First post", "Another post", "Read this!"];
  // $articles = [1 => "First post", 3 => "Another post", "Read this!"];
  // $articles = [
  //   "first" => "First post",
  //   "second" => "Another post",
  //   "third" => "Read this!"
  // ];

  $articles = [
    'a' => "First post",
    'b' => "Another post",
    'c' => "Read this!"
  ];

  // $values = [
  //   "message" => "Hello world!",
  //   "count" => 150,
  //   "pi" => 3.14,
  //   "status" => false,
  //   "result" => null
  // ];
  
  // $count = 3;
  // $price = 9.99;
  // $values = [$count, $price];

  // $alice = [
  //   "name" => "Alice",
  //   "email" => "alice@example.com",
  //   "height" => 1.80
  // ];
  // $bob = [
  //   "name" => "Bob",
  //   "email" => "bob@example.com",
  //   "height" => 1.67
  // ];
  // $carol = [
  //   "name" => "Carol",
  //   "email" => "carol@example.com",
  //   "height" => 1.74
  // ];
  // $people = [$alice, $bob, $carol];

  // $alice_mail = $people[0]["email"];

  // $people = [
  //   [
  //     "name" => "Alice",
  //     "email" => "alice@example.com",
  //     "height" => 1.80
  //   ],
  //   [
  //     "name" => "Bob",
  //     "email" => "bob@example.com",
  //     "height" => 1.67
  //   ],
  //   [
  //     "name" => "Carol",
  //     "email" => "carol@example.com",
  //     "height" => 1.74
  //   ]
  // ];

  // $articles = [
  //   ["title" => "First post", "content" => "This is the first post"],
  //   ["title" => "Another post", "content" => "Another posto to read here"],
  //   ["title" => "Read this!", "content" => "You must read this article!"]
  // ];

  // var_dump($articles);

  // var_dump($articles[0]);
  // var_dump($articles[2]);

  // var_dump($articles["second"]);

  // var_dump($values);

  // var_dump($people);
  // echo "Alice's email: $alice_mail";

  // var_dump($articles);
  // echo "Second article's title: " . $articles[1]["title"];

  // foreach ($articles as $article) {
  //   echo $article, ", ";
  // }

  foreach ($articles as $index => $article) {
    echo $index . ' - ' . $article, ", ";
  }

?>