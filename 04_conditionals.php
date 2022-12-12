<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */


// < Less than
// > Greater than
// <= Less than or equal to
// >= Greater than or equal to
// == Equal to
// === Identical to
// != Not equal to
// !== Not identical to


/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 16;

// if ($age >= 18) {
//   echo "You are old enough to vote";
// } else {
//   echo "Sorry, you are too young to vote";
// };

$t = date("H");
// $t = 15;

// echo $t;
// if ($t < 12) {
//   echo "Good Morning";
// } else if ($t > 12) {
//   echo "Good Afternoon";
// } else {
//   echo "Not a valid time";
// };

// Truthy/Falsey
// infers if a value is truthy or falsey
// ! operator flips what follows

$posts = ['First Post'];

// if (!empty($posts)) {
//   print_r($posts);
// } else {
//   echo "No Posts";
// };

//
/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
// if no false statement, you can use null
// echo !empty($posts) ? $posts[0] : "No Posts";
// $first_post = !empty($posts) ? $posts[0] : "No Posts";
// Coalesent operator: (??)
$first_post = $posts[0] ?? "No Posts";
// echo $first_post;


/* -------- Switch Statements ------- */
$fav_colour = 'red';

switch ($fav_colour) {
  case 'red':
    echo "Your favourite colour is red";
    break;
  case 'blue':
    echo "Your favourite colour is blue";
    break;
  case 'green':
    echo "Your favourite colour is green";
    break;
  default:
    echo "You do not have a fav colour";
    break;
}
