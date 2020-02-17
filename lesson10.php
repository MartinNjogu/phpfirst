<?php
require 'header.php';
require 'config.php';

//Complete php form
//algorthm
//1. create variable that will store recieved data
$username=$first_name=$last_name=$email=$password1=$password2=$gender='';

//2.create variables hat will store error messages
$username=$first_name=$last_name=$email=$password1=$password2=$gender='';
//3.check if the data is empty
//3.1.check the request method
if($_SERVER['REQUEST_METHOD']=='POST'){
    //3.2.clean data
        $username=safisha($_POST['username']);
    $first_name=safisha($_POST['first_name']);
    $last_name=safisha($_POST['last_name']);
    $email=safisha($_POST['email']);
    $password1=safisha($_POST['pass1']);
    $password2=safisha($_POST['pass2']);
    $gender=safisha($_POST['gender']);


}

//3.3check if data is empty
if(empty($username)){
    $username_err="please enter your username";
}
if(empty($first_name)){
    $first_name_err="please enter your first name";
}
if(empty($last_name)){
    $last_name_err="please enter your last name";
}
if(empty($email)){
    $email_err="please enter your email";
}
if(empty($password1)){
    $password1_err="please enter your password";
}
if(empty($password2)){
    $password2_err="please confirm your password";
}
if(empty($gender)){
    $gender_err="please select your gender";

}
if ($password1 !=$password2){
    $password1="Your password did not match ";
}else{
    $password1=md5($password1);
    //inserting data into the table
    $sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL ,'$username','$first_name','$last_name','$email','$password1','$gender')";
    if (mysqli_query($connection,$sql)){
        echo "data inserted successfully<br>";
    }else{
        echo "Data not inserted".mysqli_error($connection);
    }

}


?>
<table style="width: 100%">
<tr>
    <th>Username</th>
    <th>First name</th>
     <th>Last name</th>
     <th>password1</th>
     <th>gender</th>
 </tr>
<td><?php echo $username .'<br>';?> </td>
    <td><?php echo $first_name.'<br>';?> </td>
    <td><?php echo $last_name .'<br>';?> </td>
    <td><?php echo $email .'<br>';?> </td>
    <td><?php echo $password1 .'<br>';?> </td>
    <td><?php echo $gender .'<br>';?> </td>
</tr>
</table>
<?php
//4.display the data ; soon store data in a database
function safisha($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}


?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"enctype="multipart/form-data">
<fieldset>
    <label for="">Username</label><br>
    <input type="text" name="username"><br>
    <span class="error" style="color: indianred"><?php echo $username_err ?></span><br>

    <label for="">First name</label><br>
    <input type="text" name="first_name"><br>
    <span class="error" style="color: indianred"><?php echo $first_name_err ?></span><br>

    <label for="">Lastname</label><br>
    <input type="text" name="last_name"><br>
    <span class="error" style="color: indianred"><?php echo $last_name_err ?></span><br>

    <label for="">Email</label><br>
    <input type="email" name="email"><br>
    <span class="error" style="color: indianred"><?php echo $email_err ?></span><br>

    <label for="">Password</label><br>
    <input type="password" name="pass1"><br>
    <span class="error" style="color: indianred"><?php echo $password1_err ?></span><br>

    <label for="">Confirm Password</label><br>
    <input type="password" name="pass2"><br>
    <span class="error" style="color: indianred"><?php echo $password2_err ?></span><br>

    <input type="radio"name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio"name="gender" value="other">Others
    <span class="error" style="color: indianred"><?php echo $gender_err ?></span><br>
<button type="submit">join</button>






</fieldset>






</form>
<?php

require 'footer.php';
?>