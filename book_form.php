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
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $guests= $_POST['guests'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];

    $sql="insert into book_form(name,phone,address,location,guests,arrivals,leaving) values ('$name','$phone','$address','$location','$guests','$arrivals','$leaving')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "<script>alert('We will contact you soon')</script>";
    echo "<h1><center>Thanks for connecting Us.</center></h1>";
    mysqli_close($conn);
?>
