<?php
//an array stores multiple values in one variable
//An array is a special variable which can hold more than one value at a time
$fruit1='Mango';
$fruit2='Apple';
$fruit3='berry';
$fruit4='orange';
$fruit5='Avocado';
$fruit6='Water melon';
$fruit7='guava';
//in php the array function is used to create an array;
$fruits=array('Mango','Apple','berry','orange','Avocado','Water melon', 'guava');
//echo $fruits;
//count no of items in an array;use count()function
$num_items=count($fruits);
echo $num_items.'<br>';

//Accessing array items;use square brackets with index no inside\
echo$fruits[0].'<br>';
echo$fruits[1].'<br>';
echo$fruits[2].'<br>';
echo$fruits[3].'<br>';
echo$fruits[4].'<br>';
echo$fruits[5].'<br>';
echo$fruits[6].'<br>';
echo "my fav fruit is ".$fruits[0]." and ".$fruits[3].'<br>';

//looping through an indexed array:use foreach
foreach ($fruits as $matunda){
    echo $matunda.'<br>';}
//    using a for loop.loop from 0-100.if a no. is a multiple of 3 echo"FIZZ".
//if a no. is a multiple of  5 echo "buzz". if a no. is a multiple of both 3 and 5
//echo"fizzbuzz" Otherwise echo the number
for ($x=0;$x<100; $x++){
        if($x==0){
            echo 'not divisible by 3 or 5<br>';}
        elseif ($x%15==0){
            echo'$x fizzbuzz <br>';}
        elseif ($x%3==0){
            echo'$x fizz <br>';}
        elseif ($x%5==0){
            echo'$x buzz <br>';}
        else{
            echo'$x <br>';
        }
}

for($i=100;$i<100;$i++){
    if($i%3==0and$i%5==0){
        echo'$x fizzbuzz <br>';
    }
    elseif ($x%3==0){
        echo'$x fizz <br>';}
    elseif ($x%5==0){
        echo'$x buzz <br>';}
    else{
        echo'$x <br>';
    }



}



























///for(initial_value;text_value;increment_value){
//    code to be executed
//}
for ($x=0;$x<count($fruits);$x++){
//    echo out each item by accessing them using index numbers
    echo$fruits[$x].'<br>';
}
$num_fruits=count($fruits);
//stores the no. of items in the fruit array
    for($x=0; $x<$num_fruits ;$x++){
//    echo out each item by accessing them using index numbers
    echo$fruits[$x].'<br>';
}

//Associative array: 1 Populating directly
$geeks_fruits = array("Craig"=>"Mango","Steve"=>"Apple","Victor"=>"Mapera","Masoud"=>"Grapes");

$football_kits =array("Man_U"=>"red","Juve"=>"white","Chelsea"=>"Blue","Barca"=>"black");
echo '<br>';

//Associative array: 1 Populating one by one
$country_car_brand['Kenya']='Nyayo';
$country_car_brand['Germany'] = array('Benz','BMW','VW');
$country_car_brand['USA']='Ford';
$country_car_brand['Japan']=array('Minstubishi','Toyota');
$country_car_brand['China'] ='Hyundai';

echo $country_car_brand['Kenya'];

foreach ($country_car_brand['Germany'] as $gari1) {
   echo $gari1. '<br>';
}
$car_count =count($country_car_brand['Germany']);
for($i=0;$i<$car_count;$i++){
    echo $country_car_brand['Germany'][$i].'<br>';

}
$car_count=count($country_car_brand ['Germany']);
$car_found_germany =$country_car_brand['Germany'];
for($i=0; $i<$car_count;$i++){
    echo$car_found_germany[$i].'<br>';
}