
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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
      .form-style-4{
	width: 450px;
	font-size: 16px;
	background: #495C70;
	padding: 30px 30px 15px 30px;
	border: 5px solid #53687E;
}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #fff;

}
.form-style-4 label {
	display:block;
	margin-bottom: 10px;
}
.form-style-4 label > span{
	display: inline-block;
	float: left;
	width: 150px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=email] 
{
	background: transparent;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	outline: none;
	padding: 0px 0px 0px 0px;
	font-style: italic;
}
.form-style-4 textarea{
	font-style: italic;
	padding: 0px 0px 0px 0px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	overflow: hidden;
	resize:none;
	height:20px;
}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=email]:focus,
.form-style-4 input[type=email] :focus
{
	border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
	background: #576E86;
	border: none;
	padding: 8px 10px 8px 10px;
	border-radius: 5px;
	color: #A8BACE;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #394D61;
}
    </style>
    <body>
        <!-- 
            SELECT biglietti.numero, biglietti.costo,biglietti.classe,prenotazioni.posto FROM biglietti,prenotazioni,clienti WHERE prenotazioni.id_cliente = clienti.id_cliente AND biglietti.cod_prenotazione = prenotazioni.cod_prenotazione and prenotazioni.cod_prenotazione = 7 and clienti.id_cliente = 5 limit 1
         -->


      <div class="card">
      <!-- <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your purchase request;<br/> we'll be in touch shortly!</p> -->

        <form class="form-style-4" action="" method="post">
<label for="field1">
<div class="logo">
                            <img src="images/retina-airport.png" alt="Flight Template">
                        </div>
                        <br>
<span>inserire un codice di prenotazione</span>
<input type="text" placeholder="inseire codice di prenotazione">



<br>


</label>

<label>
<span> </span><input type="submit" value="controlla volo" class="btn btn-success btn-lg" name="volo" id="volo"/>
</label>
</form>



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