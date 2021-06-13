<?php
session_start();
?>
<!-- dati provenienti dopo la registrazione -->
	
<?php

function auto_incremement_ID() {
    $connection = mysqli_connect("localhost","root","","vtb",3326);
    $query = "SELECT id_cliente FROM clienti";
    $result = mysqli_query($connection,$query);
    $ultimo_id = 0;
    if(mysqli_num_rows($result)!=0){
    
        while($row = mysqli_fetch_array($result)){
            $ultimo_id =$row[0];
        }
    }

    return $ultimo_id + 1;
}



    if(isset($_POST["passaporto"])  && isset($_POST["nome"]) && isset($_POST["cognome"])    && isset($_POST["tel"]) && isset($_POST["username"]) && isset($_POST["pass"]) && isset($_POST["data_nascita"]) && isset($_POST["green_pass"]) && isset($_POST["email"]) && isset($_POST["carta_credito"])   ){
        $passaporto = $_POST["passaporto"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $tel = $_POST["tel"];
        $username = $_POST["username"];
        $passwd = $_POST["pass"];
        $data_nascita = $_POST["data_nascita"];
        $green_pass = $_POST["green_pass"];
        $email = $_POST["email"];
        $carta_credito = $_POST["carta_credito"];

        $id_cliente = auto_incremement_ID();

        $connection = mysqli_connect("localhost","root","","vtb",3326);
        $query = "INSERT INTO `clienti`( `id_cliente`,`passaporto`, `cognome`, `nome`, `tel`, `green_pass`, `data_nascita`, `username`, `passwd`, `email`, `num_carta`) VALUES ($id_cliente,'$passaporto','$cognome','$nome','$tel','$green_pass','$data_nascita','$username','$passwd','$email','$carta_credito')";
        $result = mysqli_query($connection,$query);
		

    }
      
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="naviga.php" method="POST" >
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username_login" placeholder="inserisce lo username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass_login" placeholder="inserisci la password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<!-- <div class="text-right p-t-8 p-b-31">
						<a href="#">
							password dimenticata?
						</a>
					</div> -->
                    <br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<!-- <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div> -->

					<!-- <div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div> -->

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Oppure
						</span>

						<a href="registrazione.php" class="txt2">
							Registrati
						</a>
					</div>
				</form>
		
			</div>
		</div>
	</div>


			<!-- controllo sul login -->
		
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main_login.js"></script>

</body>
</html>