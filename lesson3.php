<?php
//php operators
//used to perform operations on variables and values
//php has the following operators
//1 Arithmetic ops
//2 assignment ops
//3 comparison ops
//4 logical ops
//arithmetic ops+,addition
$x=23;
$y=234;
$sum =$x +$y;
echo $sum.'<br>';
echo 'the sum of 23 and 234 is'. $sum. '<br>';
//- subtaction
$x=234;
$y=23;
$sub =$x +$y;
echo $sum.'<br>';
echo 'the sub of 234 and 23 is'. $sub. '<br>';
//*,multiplication
$x=23;
$y=234;
$mult =$x *$y;
echo $mult.'<br>';
echo 'the Mult of 23 and 234 is'. $mult. '<br>';
//  /,division
$x=23;
$y=234;
$div =$y/$x;
echo $div.'<br>';
echo 'the div of 23 and 234 is'. $div. '<br>';
// %,modulus
$x=3;
$y=2;
$mod =$x%$y;
echo $mod.'<br>';
echo 'the mod of 3 and 2 is'. $mod. '<br>';
echo 3%2;
echo '<br>';
// **exponential
echo 2**3;
//2 assignment ops
//use to write a value to a variable
$car ='Benz';
$i=12;
$f=12.12;
// assignment ops with other assignment ops
$s=30;
$sum= $i+$s;
$i=$i+$s;
echo $i;
echo'<br>';
$a=100;
$b=200;
$a+=100;
echo $a;
echo'<br>';
//subtaction
$a=100;
$b=200;
$a-=50;
echo $a;
echo'<br>';
//multiplication
$a=100;
$b=200;
$a*=$b;
echo $a;
echo'<br>';
//,division
$a=100;
$b=200;
$b/=$a;
echo $b.'<br>';
// %,modulus
$a=2000;
$b=100;
$b%=$a;
echo $b.'<br>';
// **exponential
$a=100;
$b=100;
$b**=$a;
echo $b.'<br>';

//3 comparison ops
//used to compare values

//3 comparison ops return a boolean data type:true ,false

//1. ==(equal)
echo'<br>';
$s=2;
$t=3;
$j=2;
$answer =$s==$t;
var_dump($answer);
echo'<br>';
$db_username='martin';
$db_password='martin20';

$user_username='mikedoe';
$user_password="123pass";
$check=$db_username==$user_username;
var_dump($check);
echo'<br>';

//2.= = =;Identical:returns true if one variable is equal to another
// variable and is two variables are of the same datatypes
$check=$db_password===$user_password;
var_dump($check);
echo'<br>';
//3. != ;not equal to :return true if two variables are not equal
$check=$db_username!=$user_username;
var_dump($check);
echo'<br>';
//4. !==; not identical:return rue if 2 variables are not identical
$check=$db_username!==$user_username;
var_dump($check);
echo'<br>';
//5. >;Greater than:returns true if the value is greater than the other value
$myname='Martin';
$yourname="John Graham Doe";
$result =strlen($myname)>strlen($yourname);
var_dump($result);
echo'<br>';
//6. <;less than:returns true if the value is less than the other value
$myname='Martin';
$yourname="John Graham Doe";
$result =strlen($myname)<strlen($yourname);
var_dump($result);
echo'<br>';

//7. >= ;Greater than or equals to:returns true if the value is greater than or equals true the other value
$myname='Martin';
$yourname="John Graham Doe";
$result =strlen($myname)>=strlen($yourname);
var_dump($result);
echo'<br>';
//8. <=;less than or equal to:returns true if the value is less than or equal the other value
$myname='Martin';
$yourname="John Graham Doe";
$result =strlen($myname)<=strlen($yourname);
var_dump($result);
echo'<br>';

//4 logical ops
//used to combine conditional statemats
// 1. and : returns true if two oparetions are true
$x=100;
$y=200;
if($x==100 and $y ==200){
    echo '<h1> it is true $x is equal to 100 and $y is equal to 200</h1>';
}
// 1. or : returns true if one of the two operations is true
$x=100;
$y=200;
if($x==300 or $y !=$x){
    echo '<h1> it is true $x is equal to 100 and $y is not equal to 200</h1>';
}
if($x==300 or $y !=$x){
    echo '<h1> it is true $x is equal to 100 and $y is not equal to 200</h1>';
}
//3. ! not :returns true if a variable is false
$check= !($x==100 and $y ==200);
var_dump($check);
?>