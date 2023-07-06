<?php

/**
 * Variables are "containers" for storing information.
 * In PHP, a variable starts with the $ sign, followed by the name of the variable:
 * Rules for PHP variables:

 * A variable starts with the $ sign, followed by the name of the variable
 * A variable name must start with a letter or the underscore character
 * A variable name cannot start with a number
 * A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
 * Variable names are case-sensitive ($age and $AGE are two different variables)
 * PHP is a Loosely Typed Language
 * You will learn more about strict and non-strict requirements
 * PHP Variables Scope

 * local
 * global
 * static
 * Global Variables - Superglobals

 */

/**
 * 1. Global and Local Scope
 * A variable declared outside a function has a GLOBAL SCOPE and
 * can only be accessed outside a function:
 */

$x = 10; // global scope

function test()
{
    // // // // echo       "variable x inside function: $x" . "\n"; // because you can't use it inside the function
}
test();
// // // echo       "Variable x outside function is: $x";

/**
 * A variable declared within a function has a LOCAL SCOPE and
 * can only be accessed within that function:
 */
function myTest()
{
    $x = 5; // local scope
    // // // echo       "Variable x inside function is: $x ";
}
myTest();

// using x outside the function will generate an error
// // // // echo       "  Variable x outside function is: $x ";

/**
 * The global Keyword
 * The global keyword is used to access a global variable from within a function.
 * To do this, use the global keyword before the variables (inside the function):
 */

$gx = 5;
$gy = 10;

function globalVariable()
{
    global $gx, $gy, $z;
    $z = $gx + $gy;
}

globalVariable();
// // echo     $z; // outputs 15

/**
 * PHP also stores all global variables in an array called $GLOBALS[index].
 * The index holds the name of the variable.
 * This array is also accessible from within functions and
 * can be used to update global variables directly.
 */

$x = 10;
$y = 10;

function globalVariableWithKeyword()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
// echo   $y; // outputs 15

/**
 * PHP The static Keyword
 * Normally, when a function is completed/executed,
 * all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
 */
function myTest3()
{
    static $s = 0;
    echo $s;
    $s++;
}

myTest3();
myTest3();
myTest3();

/**
 * Then, each time the function is called,
 * that variable will still have the information
 * it contained from the last time the function was called.
 * Note: The variable is still local to the function.
 */
