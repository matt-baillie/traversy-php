<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
function registeredUser($email)
{
  echo "User registered's email ${email}";
}

registeredUser('mbaillie@gmail.com');

// Fucntion Scope
// Scoped similarly to JS, with a fucntion scope and global scope
// However, if a variable is scoped globally it cannot be accessed without declaring it with the global keyword within the function

// $y = 12;

// function logY()
// {
//   global $y;
//   echo $y;
// }

// logY();
// Return value & Default values
function sum($n1 = 4, $n2 = 5)
{
  return $n1 + $n2;
}
$number = sum();
echo $number;

// Annonymous function
// **Requires ; at the end of the unnamed function
$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

echo $subtract(6, 9);

// arrow functions
// fn instead of function, remove return and curly brackets
$multiply = fn ($n1, $n2) =>  $n1 * $n2;
echo $multiply(9, 9);
