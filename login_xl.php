<?php
include ('./database/config.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = mysqli_query($conn, "SELECT * FROM `users`") ;
   while($row = mysqli_fetch_assoc($login)){
        if($username==$row['username'] && $password == $row['password']){
            header('location:http://localhost/pizza365/');    
            break;
        }
    }
}
?>