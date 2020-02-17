<?php
//conditional statemants are used to perform different actions based on different conditions.
//to allow your code to perform diff actions based on diff variables
//php ha the following if conditional statements

//1. if statement .executes some code if one is true
//2. if.. else statements .executes some code of a condition is true and another code if condition is false
//3. if elseif ..else statement . execute  diff codes for more than two conditions
//4.switch statements Selects one of the many blocks of code to be executed

//if(condition to examine){
//    code o be executed if condition is TRUE
//}
$db_first_name ='john Doe';
$user_first_name='john Doe';
if($user_first_name==$db_first_name){
    echo '<p>Credeentials matched . You can login ..</p>';
}

$age=15;
if($age<18){
    echo"<hi>You cannot take alcohol. Go home</hi>";
}

///2. if.. else statements .executes  code of a condition is true and another code if condis

$age=10;
if($age<18){
    echo"<hi>You cannot take alcohol. Go home</hi>";
}else{
    "<hi>You can now take alcohol</hi>";
}

//3. if elseif ..else statement . execute  diff codes for more than two conditions
//if (condition to examine)
//code o  be executed if condition is true
//elseif(condition)
//code o  be executed if the 1st condition is false, and this condition is true
//elseif(condition)
//code o  be executed if 2nd condition is false, and this condition is true
//else(
//code to be executed if all conditions are false

$age=20;
$kenyan =true;

if($age<18){
    echo"<hi>You cannot take alcohol. Go home</hi>";
}elseif($kenyan==true){
    echo"<h2>You can now take alcohol</h2>";
}else{
    echo'<h3>You r underage and not Kenyan,</h3>';
}

//using a condiional statement, check if 100 is a multiple of 2;
//if true echo "100 is a multiple of 3" else echo"100is not a multiple of 2"
//2. Write code that calculates the volume of a cylinder of height 14 and diameter 14
//echo"this is the cylinder to use if the volume is greater than 10"


$x=101;
$y=2;
$mod =$x%$y;
echo $mod;
echo '<br>';
if($mod==0){
    echo "$x is a multiple of 2";
}else{
    echo "$x is a not multiple of 2";
}
echo '<br>';
$h=14;
$d=14;
$v=0.5*$d/2*22/7*$h;
echo $v;
echo '<br>';
if($v>10){
    echo'This is the cylinder to use ' ;
}{

///4.switch statements Selects one of the many blocks of code to be executed
//switch syntax
//switch (n){
//    case label1:
//        code to execute if n=label1
//    break
//
//     case label2:
//         code to execute if n=label2
//     break
//
//     case label3:
//         code to execute if n=label3
//     break
//
//    case label4:
//        code to execute if n=label4
//    break
//
//    default:
//        code to be executed

}

$favteam='liverpool';
switch ($favteam) {
    case 'man-U';
    echo  '<p style="color: red">Man-U at position 5</p>';
    break;
    case 'liverpool';
    echo  '<p style="color: indianred">liverpool at position 1</p>';
    break;
    case 'leicester';
        echo  '<p style="color: blue">leicester at position 2</p>';
        break;
    default:
        echo'<p style="color: yellow"> None of the above is my favorite team</p>';



}







?>