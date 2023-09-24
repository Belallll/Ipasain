<?php session_start();
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logins/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logins/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logins/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logins/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logins/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logins/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logins/css/util.css">
    <link rel="stylesheet" type="text/css" href="logins/css/main.css">
    <script src="assets/js/sweet.js"></script>
    <!--===============================================================================================-->
    <style>
            @import url('https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap');

*{
    font-family: 'El Messiri', sans-serif;
}
        body{
            background-color: #0A246A;
            font-family: 'El Messiri', sans-serif;

        }
    </style>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="login.php">

					<span class="login100-form-title p-b-26">
						Welcome
					</span>
                <div class="wrap-input100 validate-input" data-validate = "Username">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100" data-placeholder="belalios123"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="belaliosup" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>
              <?php include('errors.php'); ?>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit" name="login_user">
                            Login
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="logins/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="logins/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="logins/endor/bootstrap/js/popper.js"></script>
<script src="logins/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="logins/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="logins/vendor/daterangepicker/moment.min.js"></script>
<script src="logins/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="logins/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="logins/js/main.js"></script>

</body>
</html>