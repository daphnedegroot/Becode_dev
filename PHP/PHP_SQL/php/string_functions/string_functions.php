<?php

//strlen, display the length of a string including spaces
$string = "Welcome to Cloudways";
echo "length of string: " . strlen($string) . "<br>";

//str_word_count, display the number of words
echo "number of words in string: " . str_word_count($string) . "<br>";

//strrev(), reversing a string
echo "Reversed string: " . strrev($string) . "<br>";

//strpos, searching particular text within the string.
echo "Searching for the word Cloudways: " . strpos($string, "Cloudways") . "<br>";

//str_replace, replacing specific text in a string
echo "Replaces text in a string: " . str_replace("Cloudways", "the programming world", $string) . "<br>";

//ucwords,  convert first alphabet of every word into uppercase.
$text = "Welcome to the PHP world";
echo "Convert each first letter to uppercase" . ucwords($text) . "<br>";

//strtoupper, convert the whole string to uppercase
echo "Convert all to uppercase: " . strtoupper($string) . "<br>";

//strtolower, convert the whole string to lowercase
echo "Convert all to lowercase: " . strtolower($string). "<br>";

//str_repeat, repeating a string an number of times
echo "Repeating a string, (5 times): " . str_repeat($string , 5). "<br>";

//substr, display or extract a string from a particular position.
echo "Starts at the 6th position: " . substr($string, 6) . "<br>";
echo "Starts at 0 with length of 10: " . substr($string, 0, 10) . "<br>";

//trim, remove white spaces form string
echo "Remove white spaces: " . trim($string, "Welways") . "<br>";





