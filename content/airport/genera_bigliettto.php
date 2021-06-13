<?php
session_start();
?>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>



.card {
        background: #458095;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
   *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: #458095;
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
    </style>
    <body>
        <!-- 
            SELECT biglietti.numero, biglietti.costo,biglietti.classe,prenotazioni.posto FROM biglietti,prenotazioni,clienti WHERE prenotazioni.id_cliente = clienti.id_cliente AND biglietti.cod_prenotazione = prenotazioni.cod_prenotazione and prenotazioni.cod_prenotazione = 7 and clienti.id_cliente = 5 limit 1
         -->

<div class="container">
    <center>
      
      <!-- <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your purchase request;<br/> we'll be in touch shortly!</p> -->

       
             <label for="field1">
            <div class="logo">
                            <img src="images/retina-airport.png" alt="Flight Template">
                        </div>
       
        </center>

<br>
<center><h1 style="color: #E6E4E4;">ecco il tuo biglietto</h1></center>

<div class="table-wrapper">
<?php
//post cod_prenotazione
$cod_prenotazione = $_POST['biglietto'];

$id_cliente =  $_SESSION["id_cliente"];
$num_persone = $_SESSION["num_biglietti"];

$connection = mysqli_connect("localhost","root","","vtb",3326);
    $query = "SELECT biglietti.numero, biglietti.costo,biglietti.classe,prenotazioni.posto FROM biglietti,prenotazioni,clienti WHERE prenotazioni.id_cliente = clienti.id_cliente AND biglietti.cod_prenotazione = prenotazioni.cod_prenotazione and prenotazioni.cod_prenotazione = $cod_prenotazione  and clienti.id_cliente = $id_cliente limit 1";
    $result = mysqli_query($connection,$query);

   
            

        echo" <table class='fl-table'>";
        echo" <thead>";
        echo"<tr>";
        echo" <th>&#127380; numero del biglietto</th>";
        echo"<th>&#128176; costo</th>";
        echo"<th>&#128204; classe</th>"; 
        echo" <th>&#128186; posto</th>";
        echo"<th>&#128101; per numero di persone</th>";
        echo"</tr>";
        echo" <thead>";
        echo"<tbody>";

    if(mysqli_num_rows($result)!=0){
        
        while($row = mysqli_fetch_array($result)){
            echo"<tr>";
            echo" <th><h3>$row[0]</h3></th>";
            echo" <th><h3>$row[1] €</h3></th>";
            echo" <th><h3>$row[2]</h3></th>";
            echo" <th><h3>$row[3]</h3></th>";
            echo" <th><h3>$num_persone</h3></th>";
            echo"</tr>";
            
        }

        
    }else{
        echo "non ci sono prenotazioni";
    }
    echo"</tbody>";
    echo"<table/>";
    echo"<br>";

?>
<a href="area_clienti.php" class="btn btn-success"> ritona nell area clienti</a>
  <!-- <details>
                        <summary class="btn btn-success">hai ordinato per molte persone ma hai un solo biglitto?</summary>
                        <p> al <b>numero dei posti </b> va aggiunto +1( esempio. nomy-2 diventa nomy-3, nomy-4 ecc..)</p>
                       
                    </details> -->
</div>

<!-- <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
            
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
            <td>Content 1</td>
        </tr>
        <tr>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
            <td>Content 2</td>
        </tr>
        <tr>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
            <td>Content 3</td>
        </tr>
        <tr>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
            <td>Content 4</td>
        </tr>
        <tr>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
            <td>Content 7</td>
        </tr>
        <tr>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
            <td>Content 8</td>
        </tr>
        <tr>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
            <td>Content 9</td>
        </tr>
        <tr>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
            <td>Content 10</td>
        </tr>
        <tbody>
    </table>
</div> -->




</div>


      <script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>

    </body>
</html>