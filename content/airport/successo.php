<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  </head>
  <!-- Favicons -->
  <link rel="shortcut icon" href="images/favicon.ico">
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>check-in effettuato</h1> 
        <p>buon volo<br/> dal team di VTB :)</p>
        <a href="area_clienti.php" class="btn btn-success"> ritona nell area clienti</a>
      </div>


      <?php
       $cod_prenotazione = $_POST["biglietto"]; 
        $connection = mysqli_connect("localhost","root","","vtb",3326);
        $query = "UPDATE prenotazioni
        SET prenotazioni.chek_in = 'effettuato'
        WHERE prenotazioni.cod_prenotazione=$cod_prenotazione;";
        $result = mysqli_query($connection,$query);
      
      
      ?>
    </body>
</html>