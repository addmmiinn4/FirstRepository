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
while ($row=$result->fetch_assoc())
    {
        $isResult='True';
        $_SESSION["ssno"]=$row["UserNo"];
        $_SESSION["ssname"]=$row["Name"];
    }
if ($isResult=="True")
    {
        header("Location:UserHome.php");
    }
else
    {
        header("Location:Login.php?msg=invalid credentials");
    }
    $conn->close();

?>