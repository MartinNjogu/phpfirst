<?php
//Some predefined variables in Php are 'superglobals' which means that
//they are always accessible ,regardless of scope and u acn access them
//from any function, class or file without having to do anything special
//Php superglobals are
//$GLOBALS
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

//$GLOBALS
//SUPER GLOBALS ARE BUILT IN VARIABLES THAT ARE ALWAYS AVAILABLE IN AL SCOPES.
//$GLOBALS isa php superglobal variable which is used to access global variables
//from anywhere in the phpscript {also from within functions or methods}.
//php stores all global variables in an array called $GLOBAL {index}
//the index holds the name of the variable.
 $GLOBALS[ 'name']="John";
 $x=75;
 $y=25;
 $GLOBALS{'sum'}=$x+$y;


// $_SERVER

//is a php sg variable which holds info abou headers paths and script location
//use element php-self in$_SERVER

$phpfilepath =$_SERVER['PHP_SELF'];
    echo $phpfilepath.'<br>';

//ger sever name
$servername=$_SERVER["SERVER_NAME"];
echo $servername;
//get request -method
$request_method=$_SERVER["REQUEST_METHOD"];
    echo "REQUEST_METHOD:".$request_method.'<br>';

//$_REQUEST

$get_name=$_REQUEST['jina'];
echo $get_name .'<br>';
$get_mail=$_REQUEST['mail'];
echo $get_mail .'<br>';
$get_pass=$_REQUEST['pass'];
echo $get_pass .'<br>';
echo"
<form action='lesson8.php' method='post'>
<label for=''>Username</label>
<input type='text' name='jina'>
<br>
<label for=''>Email</label>
<input type='text' name='mail'>
<br>
<label for=''>Password</label>
<input type='password' name='pass'>
<br>
<button type='submit'>Send data </button>
</form>
"




























































?>