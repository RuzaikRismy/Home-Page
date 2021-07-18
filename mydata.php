<?php 

if(isset($_POST['signup'])){
    $conn=mysqli_connect("localhost","root","","misga");
    $mail=$_POST['email2'];
    $pass=$_POST['password2'];
    $cpass=$_POST['cpassword'];

    $sql="INSERT INTO pro2(email,password,cpassword) VALUES('$mail','$pass','$cpass')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "successfully added";
    }else{
        echo "Somwthing went wrong";
    }
}else{
    echo "Invalid Try";
}

?>