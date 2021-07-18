<?php

if(isset($_POST["login"])){
    $conn = mysqli_connect("localhost", "root","", "misga");
    $email=$_POST['email1'];
    $password=$_POST['password1'];

    $sql = "INSERT INTO pro1 ( email,password) VALUES( '$email','$password' )";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "WELCOME,YOU SUCCESSFULLY LOGED";
    }else{
        echo "SOMETHING WENT WRONG";
    }

}else{
    echo "Invalid Access";
}
 
?>