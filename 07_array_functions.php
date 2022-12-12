<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
$fruits = ['apple', 'orange', 'pear'];

// length: count()
// echo count($fruits);

// Search Array: in_array()
// var_dump(in_array('apple', $fruits));

// Add to array: using array name and [] = value
$fruits[] = 'grape';
// or array_push(arg)
array_push($fruits, 'banana', 'strawberry');
// add to beginning
array_unshift($fruits, 'blueberry');

// Remove from array
array_pop($fruits);
array_shift($fruits);
// remove a specific index. Actual index is removed; ie) indexes are now 0, 1, 3, 4,...
// unset($fruits[2]);

// Split into chunks of #, 2
$chunked_array = array_chunk($fruits,  2);


// print_r($chunked_array);
// print_r($fruits);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

// Merging arrays & Spread operator
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

// print_r($arr3);

// Combine keys and values in an Associative array
$a = ['red', 'green', 'orange'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);
// print_r($c);

// $keys = array_keys($c);
// print_r($keys);

// Flip/swap key-values of array: array_flip()
$flipped = array_flip($c);
// print_r($flipped);

// Create ranged array
$numbers = range(1, 20);
// print_r($numbers);

// Map through array
$new_numbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);
// print_r($new_numbers);

// Filter through array
$less_than_10 = array_filter($numbers, fn ($number) => $number < 10);
// print_r($less_than_10);

// Reduce: takes a carry over # and number
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);
