<?php


//fetch  user from db using the received id[$user_id
require 'header.php';
require 'config.php';


if(isset($_GET['id'])){
    $id=$_GET['id'];
    echo $id;
//    fetch data trom db using id
    $sql="SELECT `id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender` FROM `users` WHERE id=$id";
    $user=mysqli_query($connection,$sql);
    //create associative arrays to split data into columns titlee and actual value s with mysqli_tetch
    $row=mysqli_fetch_assoc($user);
    echo "<div class='card'>";
echo $row['username'].'<br>';
echo $row['firstname'].'<br>';
echo $row['lastname'].'<br>';
echo $row['email'].'<br>';
echo $row['gender'].'<br>';



    echo "</div>";
}





require 'footer.php';
?>