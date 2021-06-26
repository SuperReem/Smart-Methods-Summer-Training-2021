<?php

 echo("<title>CURRENT INPUT (Base)</title>");
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "Robot";
$conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$db");
$row = "";


    $sql = "SELECT * FROM Directions";
    $result_set = mysqli_query($conn, $sql);

    if($result_set){
        
          while($row = mysqli_fetch_array($result_set)) {
             
             echo "".$row['directions']."<br>";
               
         }        
    }
    
    
    
    
 
?>
