<?php
//loops:
//We use loops to execute a block of code again*2 as long as a certain condition is true
//In php we have the following loop types\
//While loop through a block of cod as long as the specified condition is true

//syntax
//while(condition){
//    \code to be executed
//}
$count =0;
while($count<20){
    if($count%3==0){
        echo$count. 'Divisible by 3 ';
     }
    else{
        echo$count. 'Not divisible by 3<br>';
    }

}













//do..while loops though a block of code once and then repeats he loop as long as the specified
//syntax
//do{
//    code to execute
//}while(condition is true)
$x=0;
do{
    echo "<div style='border: 2px solid red'>
    <p>$x</p>
    </div>";
    $x++;
}while ($x<10);

//for loops through a block of code a specified no of times
//syntax
//for(initial_value;text_value;increment_value){
//    code to be executed
//}
//initial_value:Initialise the loop counter value ;dermines the starting of a loop
//test value:evaluates for each loop iteration If it evaluates to true the loop continue  if false the loop ends
//Increment value: increases the loop counter value
for ($x=0;$x<=10;$x++){
    echo '<span>Value :$x</span> <br>';
}


// for each loops through a block of code for each code in an array
?>

























