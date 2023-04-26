<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="Tour";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="Insert into contact(Name,Email,Phone,Subject,Message) values ('$name','$email','$phone','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "<script>alert('We will contact you soon')</script>";
    echo "<h1><center>Thanks for Connecting Us!</center></h1>";
    mysqli_close($conn);
 
?>
