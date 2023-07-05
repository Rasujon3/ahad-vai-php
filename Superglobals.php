<?php
/**
 * PHP Global Variables - Superglobals
 *Some predefined variables in PHP are "superglobals",
 *which means that they are always accessible, regardless of scope - and
 * you can access them from any function, class or file
 * without having to do anything special.

 *The PHP superglobal variables are:

 *$GLOBALS
 *$_SERVER
 *$_REQUEST
 *$_POST
 *$_GET
 *$_FILES
 *$_ENV
 *$_COOKIE
 *$_SESSION
 */

/**
 * PHP $GLOBALS
 * $GLOBALS is a PHP super global variable which is used to access global variables
 * from anywhere in the PHP script (also from within functions or methods).

 * PHP stores all global variables in an array called $GLOBALS[index].
 * The index holds the name of the variable.
 */

$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
