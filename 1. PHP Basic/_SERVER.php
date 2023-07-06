<?php
/**
 * Super global variables are built-in variables
 * that are always available in all scopes.

 * PHP $_SERVER
 * $_SERVER is a PHP super global variable which
 * holds information about headers, paths, and script locations.
 */

echo $_SERVER['PHP_SELF'];
echo "/n";
echo $_SERVER['SERVER_NAME'];
echo "/n";
echo $_SERVER['HTTP_HOST'];
echo "/n";
echo $_SERVER['HTTP_REFERER'];
echo "/n";
echo $_SERVER['HTTP_USER_AGENT'];
echo "/n";
echo $_SERVER['SCRIPT_NAME'];
