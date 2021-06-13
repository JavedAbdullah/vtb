<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    </style>
</head>

<body>
<?php
	
	
		$username = $_POST["username_login"];
        $passwd = $_POST["pass_login"];
		$connection = mysqli_connect("localhost","root","","vtb",3326);



		$query="SELECT * FROM clienti WHERE username='$username' AND passwd='$passwd'";
		$result = mysqli_query($connection,$query);
		if(mysqli_num_rows($result)<1){
            header("Location: errore_credenziali.php");
		}else{
			$id_cliente = 0;
			while($row = mysqli_fetch_array($result)){
				$id_cliente =$row[0];
			}
			$_SESSION["id_cliente"]= $id_cliente;
			header("Location: prenotazione2.php");
		}

		
	
	
	
	?>
    
</body>
</html>




