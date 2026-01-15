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
    function registervalidation() {
        if (document.getElementById("n").value.trim() == "") {
            alert("Please enter Name!!");
            document.getElementById("n").focus();
            document.getElementById("n").style.backgroundColor = "red";
        } else if (document.getElementById("n").value.trim().length < 3) {
            alert("The Name should be minimum 3 characters long!!");
            document.getElementById("n").focus();
            document.getElementById("n").style.backgroundColor = "red";
        } else if (document.getElementById("d").value.trim() == "") {
            alert("Please enter Date Of Birth!!");
            document.getElementById("d").focus();
            document.getElementById("d").style.backgroundColor = "red";
        } else if (document.getElementById("e").value.trim() == "") {
            alert("Please enter Education!!");
            document.getElementById("e").focus();
            document.getElementById("e").style.backgroundColor = "red";
        } else if (document.getElementById("em").value.trim() == "") {
            alert("Please enter Email!!");
            document.getElementById("em").focus();
            document.getElementById("em").style.backgroundColor = "red";
        } else if (document.getElementById("nu").value.trim() == "") {
            alert("Please enter Phone Number!!");
            document.getElementById("nu").focus();
            document.getElementById("nu").style.backgroundColor = "red";
        } else if (document.getElementById("u").value.trim() == "") {
            alert("Please enter Username!!");
            document.getElementById("u").focus();
            document.getElementById("u").style.backgroundColor = "red";
        } else if (document.getElementById("p").value.trim() == "") {
            alert("Please enter Password!!");
            document.getElementById("p").focus();
            document.getElementById("p").style.backgroundColor = "red";
        } else {
            document.getElementById("registerfrm").submit();
        }
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
                    <ul class="navbar-nav  mx-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="Register.php">Register <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login.php">Login</a>
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
                    <a href="Index.html">Home</a>&nbsp
                    &nbsp<a href="Login.php">Login</a>
                </td>
            </tr>
        </table>
    </div> -->
    <div name="content" id="content" style="height: 560px;">
        <br><br><br><br>
        <form name="registerfrm" id="registerfrm" action="RegisterHandler.php" method="get">
            <table align="center" border="1" style="border-collapse: collapse;">
                <tr>
                    <th colspan="2" style="font-size: xx-large;">Register
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="n" id="n"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" id="female" name="g" value="female">Female<br>
                        <input type="radio" id="male" name="g" value="male">Male
                    </td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="date" name="d" id="d"></td>
                </tr>
                <tr>
                    <td>Education</td>
                    <td><select name="e" id="e">
                            <option></option>
                            <option>SSLC</option>
                            <option>Plus two</option>
                            <option>Graduate</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="em" id="em"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="nu" id="nu"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="u" id="u"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="p" id="p"></td>
                </tr>
                <tr>
                    <td><button type="reset">Reset</button></td>
                    <td><button type="button" onclick="registervalidation()">Register</button></td>
                </tr>
            </table>
        </form>
    </div>
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