<?php
//php data types
//vaiables can can store diff types of data that  do diff stuff
//php supports the following dats types
//1String
//2interegers
//3float
//4boolean
//5Arrays
//6Objects
//7Null
//8Resouses

//string
//a sequence of characters in double or single quotes
//e.g "hello world "'hello world'
//rules that govern names  of variables

//A variable starts with a $ followed by name of the variadle
//A varable name mush start with a letter or the underscore character
//A varaible name cannot start with a number
//A variable name can only contain numeric caracters and underscores(a-z, 0-9)
//Variables names are case sensitive

$x = "PhpPhpPhpPhpPhpPhpPhpPhpPhpPhp";
$y ="Kotlin";
$Y ="Android";
var_dump($x);
var_dump($y);
var_dump($Y);
//counting characters
//counting astring :use strlen function
//function:code that helps in repetitive tasks
echo strlen($x);
echo strlen('john doe');
echo '<br>';
//countig words in string by str_word_count
echo str_word_count('i love coding in php');
echo '<br>';
$num_words =str_word_count('Coding is fun');
echo $num_words;
echo '<br>';

$position_for_world =strpos ('Hello World','world');
echo $position_for_world;
echo '<br>';
//replace text within a string:use gtr_replace
echo str_replace('world', 'Dunia', 'hello world');

//Integers
//Numbers that are non decimal
//must at least have one digit
$age =21;
van_dump($age);
//Float
//is a number with a decimal point

$cup_volume=32;
van_dump($cup_volume);
echo'<br>';

//Boolean
//oftenly used in conditional statements
$a =true;
$b =false;
echo'<br>';
//echo 3 <5 ; returns 1 :true
echo'<br>';
//echo 3<5;reterns nothing on the browser









?>