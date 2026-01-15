<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="myfirstdb";
$conn=new mysqli($server_name,$user_name,$password,$dbname);
$u=$_GET['userid'];

$q="DELETE FROM userdetails WHERE UserNo =$u";
//print($q);
$result=$conn->query($q);

        header("Location:AdminViewUsers.php");
  
    $conn->close();

?>