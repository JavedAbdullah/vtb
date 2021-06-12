<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <?php 
    
    
  //   $strJsonFileContents = file_get_contents("https://restcountries.eu/rest/v2/all");
  //  $array = json_decode($strJsonFileContents, true);

   //$connection = mysqli_connect("localhost","root","","vtb",3326);
  


//    for($i=0;$i<count($array);$i++){
//        $code =$array[$i]['alpha2Code'];
//        if($array[$i]["capital"]==null){
//            $src_flag = $array[$i]['flag'];
//            $name_city = $array[$i]['capital'];
//            $query = "INSERT INTO city(nome, img,id_paese) VALUES ('$name_city ','$src_flag','$code')";
//            $result = mysqli_query($connection,$query);
//           // echo"<option value=$array[$i]['name']>$array[$i]['name']</option>";
//          // echo"<option value='Vietnam'>$array[$i]['name']</option> ";
//            print_r($array[$i]["name"]."<img src='$src_flag ' alt='Girl in a jacket' width='20' height='17'>"."<br>");
//        }else{
//            $src_flag = $array[$i]['flag'];
//            $name_city = $array[$i]['capital'];
//            $query = "INSERT INTO city(nome, img,id_paese) VALUES ('$name_city ','$src_flag','$code')";
//            $result = mysqli_query($connection,$query);
//            //echo"<option value='$array[$i]['capital']'>$array[$i]['name'].'<img src='$src_flag' alt='Girl in a jacket' width='20' height='17'></option>";

//             print_r($array[$i]["capital"]." <img src='$src_flag ' alt='Girl in a jacket' width='20' height='17'>"."<br>");
//    }
       
//    }

$connection = mysqli_connect("localhost","root","","vtb",3326);
                    $query = "SELECT * FROM city";
                    $result = mysqli_query($connection,$query);
                    //<img src='$src_flag ' alt='Girl in a jacket' width='20' height='17'>

                    $immagine_partenza = "";
                    $immagine_arrivo = "";

                    if(mysqli_num_rows($result)!=0){
    
                    while($row = mysqli_fetch_array($result)){
                        if($row[2] =='AM'){
                            $immagine_partenza = $row[1];
                    }elseif($row[2] =='AZ'){
                        $immagine_arrivo = $row[1];
                    }
                    }
                }

                echo "$immagine_partenza";
                echo"<img src='$immagine_partenza'  width='20' height='17'>";


       ?> 
  </body>
</html>