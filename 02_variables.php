<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- if echoed, will show a 0 or 1. var_dump(var) will show bool(value)
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
// $name = "Matt ";
// $age = 32;
// $has_kids = true;
// $cash_on_hand = 20.75; //Float


// echo $name;
// echo $has_kids;
// var_dump($has_kids);
// var_dump($cash_on_hand);

// // Variables in string:
// // separate variables and strings with a .
// echo $name . ' is' . $age . " years old";

// // Double quotes allows variables to be inserted
// // Can use similar JS literal syntax, preferred
// echo "$name is $age years old";
// echo "${name} is ${age} years old";


// Math Operators
//  +, -, *, /, % all work the same as JS
// If written as strings it will infer the type as a #
// echo '5' + '5';

// Constants;

// use define(); function; All uppercase
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo HOST;
