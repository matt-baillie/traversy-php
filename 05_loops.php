<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
// for ($i = 0; $i <= 9; $i++) {
//   echo "Number ${i}" . '<br>';
// };

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
// while ($x <= 10) {
//   echo "While loop x variable is ${x} " . '<br>';
//   $x++;
// };

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
do {
  // code to be executed
} while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// do {
//   echo "Do loop x variable is ${x} " . '<br>';
//   $x++;
// } while ($x <= 10);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$posts = [
  "First Post",
  "Second Post",
  "Third Post",
];

// foreach ($posts as $post) {
//   echo $post . "<br>";
// }
// To get the index
// foreach ($posts as $index => $post) {
//   echo $index . ' - ' . $post . "<br>";
// }

// With associative array
$person = [
  'first_name' => 'Matt',
  'last_name' => "Baillie",
  'email' => "mbaillie@gmail.com"
];

// foreach ($person as $key => $value) {
//   echo $key . ' - ' . $value . "<br>";
// }
