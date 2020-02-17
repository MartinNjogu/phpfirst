<?php
//php $_POST is a PHP super global variable which is used to collect form
//data after submitting an html form with method post
//$_POST is also used to pass variables
//receive data
//declare variables to store data

$name='';
$email='';
//check the request method:GRT or POST use;$_SERVER[]
if ( $_SERVER['REQUEST_METHOD']=='POST'){
//    if method is post, grad the data using the $_post superglobal

    $name=$_POST['jina'];
    $email=$_POST['arafa'];
    $error =true;



    if (empty($name)){
        $error=false;
        echo "<p style='color: red'> Please fill in your name</p>";

    }
    if (empty($email)){
        $error=false;
        echo "<p style='color: red'> Please fill in your email</p>";

    }else{
        $name=safisha($name);
        $email=safisha($email);
        echo " <p style='color: green'> Your name is $name and email is $email</p> <br>";
    }

    }

//validating /cleaning data
//1.to remove unwanted space use:trim()
//2.To remove backslashes use stripslashes()
//<!--create a function to clean data-->

function safisha($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}



?>






<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <h3>Fill form...</h3>
    <input type="text" name="jina"placeholder="Enter name..." ><br>
    <input type="email" name="arafa"placeholder="Enter Email..." ><br>
    <button type="submit">Send</button>
<!--    action: location that data will be sent to in the server value lesson9.php-->
<!--method:request methord to be used to send to the server-->
<!--    name:is the key for a value entered in the form:-->
<!--    this will result to an associative array of this format.-->
    <?php
    $_POST=array("jina"=>"john","arafa"=>"john@gmail.com")
    ?>



</form>


<!--$_GET:Used to collect data from a form just like $_post-->
<!--    collect data sent via the <URL-->

<?php


$the_name=$_GET['name'];
$the_age=$_GET['age'];
$the_country=$_GET['country'];
echo "Your details:Name:$the_name,Age:$the_age ,Country:$the_country<br>";
?>
<a href="lesson9.php?name=Martin&age=23&country=Kenya">Send details</a>

























































