<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> Feane </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <script>
    function deleteuser(a) {

        document.getElementById("userid").value = a;
        document.getElementById("dlfrm").submit();

    }
    </script>
</head>

<body style="background-image:url('images/hero-bg1.jpg')">
    <header class="header_section" style="background-color:black">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                        Feane
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="AdminHome.php">Home </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="UserViewProfile.php">View Profile <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="UserUpdateProfile.php">Update Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Login.php">Logout</a>
                            </li>
                        </ul>
                        <div class="user_option">

                            <a href="" class="order_online">
                                User app
                            </a>
                        </div>
                    </div>
            </nav>
        </div>
    </header>

    <!-- <div name="header" id="header" style="background-color: skyblue; height: 100px;" ;>
            <table width="100%">
                <tr>
                    <td><img src="Logo.png" height="95px" width="120px"></td>
                    <td style="text-align: right;">
                        &nbsp<a href="UserHome.php">Home</a>&nbsp
                        &nbsp<a href="UserViewProfile.php" style="color:red">View Profile</a>&nbsp
                        &nbsp<a href="UserUpdateProfile.php">Update Profile</a>&nbsp
                        &nbsp<a href="Login.php">Logout</a>&nbsp
                    </td>
                </tr>
            </table>
        </div> -->

    <?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="myfirstdb";
$conn=new mysqli($server_name,$user_name,$password,$dbname);
if ($conn -> connect_error)
    {
        die("Notconnected".$connect_error);
    }
//print("connect databasetest");
print("<br>");
$uno=$_SESSION["ssno"];
$q="SELECT * FROM userdetails WHERE UserNo=$uno";
//print($q);
$result=$conn->query($q);
//print($result->num_rows);
  $UserNo;
  $Name;
  $Gender;
  $DOB;
  $Edu;
  $Email;
  $Phone;
  $Username;


while ($row=$result-> fetch_assoc())
{
    // print("<br>");
    //print($row ["UserNo"]);
    // print($row["name"]);
    // print($row["gender"]);
    // print($row["date"]);
    // print($row["edu"]);print($row["email"]);
    // print($row["phone"]);
    // print($row["username"]);
    // print($row["password"]);
    // print("<br>");
$UserNo=$row["UserNo"];
  $Name=$row["Name"];
  $Gender=$row["Gender"];
  $DOB=$row["DOB"];
  $Education=$row["Edu"];
  $Email=$row["Email"];
  $Phone=$row["Phone"];
  $Username=$row["Username"];

}
$conn->close();

?>





    <div name="content" id="content" style="height: 560px;">
        <br><br><br><br>
        <table align="center" border="1" style="border-collapse: collapse;width:50%">
            <tr>
                <th colspan="2" style="font-size: xx-large;">Profile Details
            </tr>
            <tr>
                <td>UserNo</td>
                <td><?php print($UserNo) ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php print($Name) ?></td>
            </tr>
            <tr>
                <td>Gender</td>

                <td><?php print($Gender) ?></td>

            </tr>
            <tr>
                <td>DOB</td>
                <td><?php print($DOB) ?></td>
            </tr>
            <tr>
                <td>Education</td>
                <td><?php print($Education) ?></td>

            </tr>
            <tr>
                <td>Email</td>
                <td><?php print($Email) ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php print($Phone) ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php print($Username) ?></td>
            </tr>


            </tr>
        </table>
    </div>
    <!-- <div name="footer" id="footer" style="background-color: skyblue; height: 100px;">
            <br><br>
            <p style="text-align: center;">@SDC</p>
        </div>
</body>

</html> -->
    <footer class="footer_section" style="height:100px">
        <div class="container">


            <p>
                &copy; <span id="displayYear"></span> Developed By
                <a href="#">SDC Chittur</a><br><br>

            </p>

        </div>
    </footer>
</body>

</html>