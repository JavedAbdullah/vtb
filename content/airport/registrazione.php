

<!DOCTYPE html>
<html lang="en">
<head>
	<title>registrazione</title>
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
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="login.php" method="POST"> 
					<span class="login100-form-title p-b-49">
						Registrazione
					</span>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Passaporto</span>
						<input class="input100" type="text" name="passaporto" placeholder="inserire il numero del passaporo">
						<span class="focus-input100" data-symbol="&#128706"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="nome" placeholder="inserire il Nome">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Cognome</span>
						<input class="input100" type="text" name="cognome" placeholder="inserire il Cognome">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">telefono</span>
						<input class="input100" type="text" name="tel" placeholder="inserire il numero di telefono">
						<span class="focus-input100" data-symbol="&#x260E;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="inserire lo username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="inserire la password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Data di nascita</span>
						<input class="input100" type="date" name="data_nascita" placeholder="inserire la data di nascita">
						<span class="focus-input100" data-symbol="&#127874;"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="inserire un email">
						<span class="focus-input100" data-symbol="&#128231;"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">carta di credito</span>
						<input class="input100" type="number" name="carta_credito" placeholder="inserire il numero della carta di credito">
						<span class="focus-input100" data-symbol="&#128179;"></span>
					</div>


                    <br>
                   
                    <div>
                    <details>
                        <summary class="pricing-button is-featured'">possiedi il green pass?</summary>
                        <p>&#9432; il passaporto vaccinale, il documento della tua nazione che attesti la vaccinazione contro il COVID-19</p>
                    </details>
                    <select name="green_pass" id="green_pass">
                        <option value="NO">NO</option>
                        <option value="SI">SI</option>
                    </select>
                    </div>
                    <br>
					
					<!-- <div class="text-right p-t-8 p-b-31">
						<a href="#">
							password dimenticata?
						</a>
					</div> -->
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Registrati
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

						<a href="login.php" class="txt2">
							accedi
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>










	

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