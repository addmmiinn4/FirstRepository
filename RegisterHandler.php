<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="myfirstdb";
$conn=new mysqli($server_name,$user_name,$password,$dbname);
$n=$_GET['n'];
$g=$_GET['g'];
$d=$_GET['d'];
$e=$_GET['e'];
$em=$_GET['em'];
$nu=$_GET['nu'];
$u=$_GET['u'];
$p=$_GET['p'];
// print($n);
// print($g);
// print($d);
// print($e);
// print($em);
// print($u);
// print($p);
$q="INSERT INTO userdetails(Name,Gender,DOB,Edu,Email,Phone,Username,Password) VALUES('$n','$g','$d','$e','$em','$nu','$u','$p')";
print($q);
$result=$conn->query($q);
$conn->close();
header("Location:Login.php"); 

?>