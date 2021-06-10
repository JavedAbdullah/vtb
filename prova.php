<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <?php 
    
    
    $strJsonFileContents = file_get_contents("https://restcountries.eu/rest/v2/all");
   $array = json_decode($strJsonFileContents, true);

   $connection = mysqli_connect("localhost","root","","vtb",3326);
  


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


       ?> 
  </body>
</html>