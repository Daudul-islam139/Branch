<?php
echo "<br>";
echo "Welcome to mysql"."<br>";
$servername = "localhost";
$username = "root";
$password = "";
//Create a connection
$conn = mysqli_connect($servername, $username, $password);


//die if connection was not successful
if (!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
//Create a DB
$sql = "CREATE DATABASE msqldb";
$result = mysqli_query($conn, $sql);

//Check for the db creation
if($result){
    echo "The db was created succesfully!";
}
else{
    echo "The db was not created succesfully! because of this error ---->". mysqli_error($conn);
}
echo "the result is";
echo var_dump($result);
echo "<br>";



?>