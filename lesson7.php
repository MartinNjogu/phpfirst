<?php
//Besides the built in  php functions it is possible to create your own functions
//A function is a block of statements that can be used separately in a program does a specific task
//A function will not perform automatically when a page loads
//A function will execute by a call to the function
// syntax
//function function_name(){
////    code to execute ONLY WHEN THIS FUNCTION IS CALLED/USED
//
//}
//function creation/decleration
function greetings(){
    echo 'Hello World';
}
//using a function/calling a function; USE FUNCTION NAME FOLLOWED BY()
greetings();
echo '<br>';
function greeting1(){
    echo 'fried chicken ';

}
greeting1();
echo '<br>';
function greeting2($name,$age){
   echo "Hello".$name."You are".$age. '<br>';

}
greeting2('John',"21");
//greeting2();call these function with enough arguments
echo '<br>';
//functions with default arguments

function greetings3($name="Php",$country="Kenya"){
    echo "I am a $name developer from $country.";

}
greetings3();
echo '<br>';
function greetings4($name){
    echo "I am a $name developer.";

}
greetings3("javascript" );
echo '<br>';

//Functions that return values
function greeings4($name){
    $get_name =$name;
    return$name;
}
$found_name=greetings4('John');
echo $found_name;
echo '<br>';
function areaofacircle($radius)
{
//    area =>pie 'r'r

    $pie = 3.142;
    $area = $pie * $radius * $radius;
    return $area;
}
$c1=7;
$c2=17;
$areac1=areaofacircle($c1);
$areac2=areaofacircle($c2);
echo $areac1;
echo $areac2;
echo '<br>';

//function that takes an array as an argument
function looparray($array_name,$myforeach=true)
{
    if ($myforeach) {
//        if true run foreach loop
//    foreach loop
        echo "FOR EACH LOOP";
        foreach ($array_name as $item) {

            echo "$item<br>";
        }
    } else {
        echo "FOR LOOP";
        //    get the length of an array
//    for loop
//        if false run for loop
        $length = count($array_name);
        for ($s = 0; $s < $length; $s++) {
            echo "$array_name{$s}<br>";
        }

    }
}
//    get the length of an array
//    for loop

    $games=array("GTA","NFS","FIFA","PES","MK","JACK RYAN","ANGRY BIRDS","CANDY CRUSH");
    looparray($games);

Assignment:
//write a function that calc the area of a circle and prints out the result
// with unit of measurements chosen
//This function should have options for u niy of measurements

echo '<br>';
function areacircle($radius ,$cm=true)
{
    $pie = 3.142;
    $area = $pie * $radius * $radius;
    if($cm){
//    area in cm
        echo"Area is $area cm";

    }else{
//    area in m
    echo "area is $area m ";



    }
}
areacircle(7);

function maxu($num1,$num2){
    if ($num1>$num2){
        return $num1;
    }else{
        return$num2;
    }

}
$results=maxu(3,4);
echo $results.'<br>';
