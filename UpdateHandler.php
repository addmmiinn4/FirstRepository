<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="myfirstdb";
$conn=new mysqli($server_name,$user_name,$password,$dbname);
$em=$_GET['em'];
$nu=$_GET['nu'];
$p=$_GET['p'];
//print($em);
// print($p);
// print($u);
// print($p);
session_start();
$uno = $_SESSION["ssno"];
$q="UPDATE userdetails SET Email='$em',Phone='$nu',Password='$p' WHERE UserNo=$uno";
//print($q);
$result=$conn->query($q);
$conn->close();
header("Location:UserViewProfile.php");
?>