<?php

//Comments in php is created by // and for multiline comments use /* and */
//To create a message use echo
echo "Hello World \n";
//variables are created by $ and are case sensitive 
$variable = "Hello World with variable \n";

echo $variable;

//other useful command is gettype() to get the type of variable
echo gettype($variable);

//php is dinamically typed, you can change the type of variable at any time

//Constants are created by const and if you need a name to be constant is in uppercase

const PI = 3.14;

//arrays are created by [], and if you need print the value use print_r()

$numbers = [1,2,3,4,5];

print_r($numbers);

//you can add a new value to an array with array_push() 

array_push($numbers, 6);

//or

array_push($numbers, $variable);

//dictionaries are created by array(), and this is a key value pair

$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

print_r($person);

//when you need access to a key value pair you can use $person["name"]
echo $person["name"];
?>