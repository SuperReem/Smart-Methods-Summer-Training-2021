<?php

 echo("<title>CURRENT INPUT (Arm)</title>");
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "Robot";
$conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$db");



    $sql = "SELECT * FROM Angles;";
    $sql2 = "SELECT * FROM ONOFF;";
    $Date1 = mysqli_query($conn,"SELECT DateTime from Angles;");
    $Date2 = mysqli_query($conn,"SELECT DateTime from ONOFF;");
    $result_set = mysqli_query($conn, $sql);
    $result_set2 = mysqli_query($conn, $sql2);
    $getDate1 = mysqli_fetch_array($Date1);
    $getDate2 = mysqli_fetch_array($Date2);
    $row2 = mysqli_fetch_array($result_set2);
    if($result_set && $result_set2){
           while($row = mysqli_fetch_array($result_set)) {
             if($getDate1['DateTime'] > $getDate2['DateTime']){
               echo "Engine1: ".$row['Engine1']."<br>";
               echo "Engine2: ".$row['Engine2']."<br>";
               echo "Engine3: ".$row['Engine3']."<br>";
               echo "Engine4: ".$row['Engine4']."<br>";
               echo "Engine5: ".$row['Engine5']."<br>";
               echo "Engine6: ".$row['Engine6']."<br>";
               
              }   
              else{
                echo "Status: ".$row2['ONOFF']."<br>";
                
              }
         }
     }
    
    
    
 
?>
