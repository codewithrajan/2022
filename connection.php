<?php
echo "hello world";
$hostname="localhost";
$username="root";
$password="Rajan@#123";
$dbname="rajan";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if($conn){
    echo "you are successfully connected";
}else{
    echo "you are not connected due to " . mysqli_connect_error();
}

?>