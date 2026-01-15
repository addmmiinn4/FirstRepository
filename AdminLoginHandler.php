<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="myfirstdb";
$conn=new mysqli($server_name,$user_name,$password,$dbname);
$u=$_GET['n'];
$p=$_GET['p'];
//print($u);
//print($p);
$q="SELECT * FROM userdetails WHERE Username='$u' AND Password='$p'";
//print($q);
$result=$conn->query($q);
$isResult="False";
session_start();
if($u=='admin' && $p=='admin'){
   $isResult="True" ;
}
if ($isResult=="True")
    {
        header("Location:AdminHome.php");
    }
else
    {
        header("Location:AdminLogin.php?msg=invalid credentials");
    }
    $conn->close();

?>