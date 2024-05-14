<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //retrieve from data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //database connection
    $severname = "localhost";
    $db_name = "db01";
    $con = new mysqli("localhost","root","","db01");
    $sql="insert into login(username,password) values('$username','$password')";
    $check = mysqli_query($con,$sql);

    if($con)
    {
        echo "connected ";
    }
    else{
        echo "failes ";
    }

    if($check)
    {
        echo "Data sended";
    }
    else
    {
        echo "Data not sended";
    }
}
?>