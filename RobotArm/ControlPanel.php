<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
    <title>Control Panel</title>
  <style>
    
      body{
       
        background: #3a6186; 
        background: -webkit-linear-gradient(to right, #89253e, #3a6186);  
        background: linear-gradient(to right, #89253e, #3a6186);
        font-family:sans-serif;
  
      }
     
      #container{
          display: flex;
          flex-direction: column;
          
      }
      #header{
          display: flex;
          flex-direction: row-reverse;
      }
      #box{
          display: flex;
          flex-direction: column;
          border-radius: 30px;
          width:50%;
          height:500px;
          background-color: #F8F8F8;
          box-shadow: 1px 1px 5px white, -1px -1px 5px white;
          align-self: center;
          align-items: center;
          justify-content: space-around;
          margin-top: 2em;
       
      }
      #sub-box{
          display: flex;
          flex-direction: row;
          justify-content: space-between;
          width: 370px;
         
      }
      #valuesContainer{
           display: flex;
           flex-direction: column;
           height: 300px;
           justify-content: space-between;
           align-self:center;
           margin-top: 1.5em;
         
      }
      #SlidersContainer{
          display: flex;
          flex-direction: column;
          width: 320px;
          height: 350px;
          justify-content: space-evenly;
         
      }
      input{
          direction: rtl;
      }
      input:hover{
          cursor: pointer;
      }
      
      label{
          align-self: flex-end;
          font-family:  'Almarai', sans-serif;
      }
      #buttonsContainer{
          justify-content: space-between;
         
      }
      .buttons{
          background-color: #E4E4E4;
          font-family: 'Almarai', sans-serif;
          padding: 10px;
          border-radius: 20px;
          border-style: none;
          height: 40px;
          width: 80px;
          font-size: 15px;
      }
      .buttons:hover{
          cursor: pointer;
          background-color: #D8D8D8;
      }
      #message{
          display: none;
      }
   
      @media screen and (max-width: 600px){
          #box{
              width: 90%;
          }
      }
       @media screen and (max-width: 960px) and (min-width: 601px){
          #box{
              width: 70%;
          }
      }
       @media screen and (max-width: 1060px) and (min-width: 901px){
          #box{
              width: 65%;
          }
      }
      @media screen and (max-height: 360px){
          #box{
              height: 100px;
          }
      }
  </style>
    
    <script>
        

      function changeValue(name,slider){
          
          var SliderValue = document.getElementById(slider).value;
          document.getElementById(name).innerHTML = SliderValue;
          
      }
        
    
        
     function successMessage(){
         (document.getElementById('message').innerHTML = 'Data Saved Successfully &#10003;');
         (document.getElementById('message').style.display = 'block');
         (document.getElementById('message').style.color = 'green');
         
         setTimeout(clear, 3000);
     } 
     function failMessage(){
        document.getElementById('message').innerHTML = 'Failed To Save Data';
        document.getElementById('message').style.display = 'block';
        document.getElementById('message').style.color = 'red';
         
        setTimeout(clear, 3000);
     } 
    function clear(){
         document.getElementById('message').innerHTML = '';
         document.getElementById('message').style.display = 'none';
         document.getElementById('message').style.color = 'tranparent';
    }
  
 
   
    </script>
    
    
</head>

<body>
  <form method="post" action="" name="myFormName">
    <div id="container">
      <div id="header">
        <img src="images/logo.png">
      </div>
    <h1 style="color:#ffffff; font-weight: 400; align-self: center; text-shadow: 2px 2px 5px white;">Robot Control Panel</h1>
    
     <div id="box">
      
         <div id="sub-box">
             
            <div id="valuesContainer">
              <span id="v1">0</span>
              <span id="v2">0</span>
              <span id="v3">0</span>
              <span id="v4">0</span>
              <span id="v5">0</span>
              <span id="v6">0</span>
            </div>
        
          <div id="SlidersContainer">
         
            <label>محرك ١</label><input name="sl1" id="s1" type="range" max="180" min="0" value="0" oninput='changeValue("v1", "s1")'>
            <label>محرك ٢</label><input name="sl2" id="s2" type="range" max="180" min="0" value="0" oninput='changeValue("v2", "s2")'>
            <label>محرك ٣</label><input name="sl3" id="s3" type="range" max="180" min="0" value="0" oninput='changeValue("v3", "s3")'>
            <label>محرك ٤</label><input name="sl4" id="s4" type="range" max="180" min="0" value="0" oninput='changeValue("v4", "s4")'>
            <label>محرك ٥</label><input name="sl5" id="s5" type="range" max="180" min="0" value="0" oninput='changeValue("v5", "s5")'>
            <label>محرك ٦</label><input name="sl6" id="s6" type="range" max="180" min="0" value="0" oninput='changeValue("v6", "s6")'>
        
          </div>
        
        </div>
       
       <div id="buttonsContainer">
           
          
           <input class="buttons" type="submit" name="OFF" value="إيقاف">
           <input class="buttons" type="submit" name="ON" value="تشغيل">
           <input class="buttons" type="submit" name="SAVE" value="حفظ">
           
       </div>
        <div id="message"></div>
   </div> 
    
   
   </div>
     <script>
      if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
      }
  </script>  
  </form> 
    
   
    
 <?php 
 
 

   $dbhost = "127.0.0.1";
   $dbuser = "root";
   $dbpass = "";
   $db = "RobotArmDB";
   $conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$db");
   $sql = "";
   $sql2 = "";
   $check ="";
   $sqlQuery = "";
   $row ="";
  if ( $_SERVER['REQUEST_METHOD'] === 'POST' ){
   if(isset($_POST['SAVE'])){
      $slider1 = $_POST['sl1'];
      $slider2 = $_POST['sl2'];
      $slider3 = $_POST['sl3'];
      $slider4 = $_POST['sl4'];
      $slider5 = $_POST['sl5'];
      $slider6 = $_POST['sl6'];
      $check = "SELECT * FROM Angles";
      $sqlQuery = mysqli_query($conn, $check);
       
      $row = mysqli_fetch_array($sqlQuery);
      if(empty($row['Engine1']) && empty($row['DateTime'])){
         $sql = "INSERT INTO Angles (Engine1, Engine2, Engine3, Engine4, Engine5, Engine6, DateTime) VALUES ('$slider1', '$slider2','$slider3','$slider4','$slider5','$slider6', now())";
      }
      else{
         $sql = "UPDATE Angles SET Engine1 = '$slider1', Engine2 = '$slider2', Engine3 = '$slider3', Engine4 = '$slider4', Engine5 = '$slider5', Engine6 = '$slider6', DateTime = now()";
      }
  
  $sql2 = mysqli_query($conn, $sql) 
          or die('Could not connect: ' . mysqli_connect_error());
   
    if($sql2) echo "<script>
       successMessage();
        </script>";

      else echo "<script>
        failMessage();
        </script>";
  
  }
    else{
          
      $check = "SELECT * FROM ONOFF";
      $sqlQuery = mysqli_query($conn, $check);
      $row = mysqli_fetch_array($sqlQuery);
    if(isset($_POST['ON'])){
     
   
    if(empty($row['ONOFF'])){
      $sql = "INSERT INTO ONOFF (ONOFF, DateTime) VALUES ('ON', now())";
    }
    else{
      $sql = "UPDATE ONOFF SET ONOFF = 'ON', DateTime = now()";
    }
   
  
    
 }
  elseif(isset($_POST['OFF'])){
      
    if(empty($row['ONOFF'])){
      $sql = "INSERT INTO ONOFF (ONOFF) VALUES ('OFF', now())";
    }
    else{
      $sql = "UPDATE ONOFF SET ONOFF = 'OFF', DateTime = now()";
    }
    
     
      }
        
     $sql2 = mysqli_query($conn, $sql) 
          or die('Could not connect: ' . mysqli_connect_error());
        
     if($sql2) echo "<script>
       successMessage();
        </script>";
      else echo "<script>
        failMessage();
        </script>";
  }
     
}
 
?>
    
  
    
</body>

   
</html>