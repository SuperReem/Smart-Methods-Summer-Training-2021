<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
    <title>Base Control Panel</title>
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
          width:40%;
          height:400px;
          background-color: #F8F8F8;
          box-shadow: 1px 1px 5px white, -1px -1px 5px white;
          align-self: center;
          align-items: center;
          justify-content: space-around;
          margin-top: 2em;
       
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
          display: grid;
          grid-template-areas: ". f ." "l s r" ". b .";
          grid-gap: 20px;
         
      }
      .buttons{
          background-color: #E4E4E4;
          font-family: 'Almarai', sans-serif;
          padding: 10px;
          border-radius: 30px;
          border-style: none;
          height: 60px;
          width: 90px;
          font-size: 15px;
      }
      .buttons:hover{
          cursor: pointer;
          background-color: #D8D8D8;
      }
      .buttons:active{
          border: 2px solid chartreuse;
          
      }
      .s:active{
          border: 2px solid red;
      }
      #message{
          display: none;
      }
      .f{
          grid-area: f;
      }
      .l{
          grid-area: l;
      }
      .s{
          grid-area: s;
          background-color: #A0647D;
      }
      .s:hover{
          background-color: #975A73
      }
      .r{
          grid-area: r;
      }
      .b{
          grid-area: b;
      }
      
      
      @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) { 
          #box{
              width: 370px;
              height: 600px;
              
          }
          .buttons{
             height: 80px;
             width: 120px;
             border-radius: 40px;
          }
          h1{
              margin-top: 400px;
          }
      }
          
      @media only screen and (max-height : 620px) and (min-height : 500px){
           #box{
             
              height: 300px;    
          }
          
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
   
</head>

<body>
  <form method="post" action="" name="myFormName">
    <div id="container">
      <div id="header">
        <img src="Images/logo.png">
      </div>
    <h1 style="color:#ffffff; font-weight: 400; align-self: center; text-shadow: 2px 2px 5px white;">Robot Base Control Panel</h1>
    
     <div id="box">
      
       <div id="buttonsContainer">
         
           <input class="buttons f" type="submit" name="Forward" value="Forward">
           <input class="buttons l" type="submit" name="Left" value="Left">
           <input class="buttons s" type="submit" name="Stop" value="Stop">
           <input class="buttons r" type="submit" name="Right" value="Right">
           <input class="buttons b" type="submit" name="Backward" value="Backward">
           
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
   $db = "Robot";
   $conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$db");
   $sql = "";
   $sql2 = "";
   $sqlQuery = "";
   $row = "";
    
 
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ){
        
      $sqlQuery = mysqli_query($conn, "SELECT * FROM Directions");
      $row = mysqli_fetch_array($sqlQuery);
      
      if(empty($row['directions'])){
          
          if(isset($_POST['Forward'])){
           $sql = "INSERT INTO Directions (directions) VALUES ('F')";
          }
          elseif(isset($_POST['Left'])){
           $sql = "INSERT INTO Directions (directions) VALUES ('L')";
          }
          elseif(isset($_POST['Stop'])){
           $sql = "INSERT INTO Directions (directions) VALUES ('S')";
          }
          elseif(isset($_POST['Right'])){
           $sql = "INSERT INTO Directions (directions) VALUES ('R')";
          }
          elseif(isset($_POST['Backward'])){
           $sql = "INSERT INTO Directions (directions) VALUES ('B')";
          }
      
    }
    
      else{
          if(isset($_POST['Forward'])){
           $sql = "UPDATE Directions SET directions = 'F'";
          }
          elseif(isset($_POST['Left'])){
           $sql = "UPDATE Directions SET directions = 'L'";
          }
          elseif(isset($_POST['Stop'])){
           $sql = "UPDATE Directions SET directions = 'S'";
          }
          elseif(isset($_POST['Right'])){
           $sql = "UPDATE Directions SET directions = 'R'";
          }
          elseif(isset($_POST['Backward'])){
           $sql = "UPDATE Directions SET directions = 'B'";
          }
     }
      
     $sql2 = mysqli_query($conn, $sql) 
              or die('Could not connect: ' . mysqli_connect_error());
        
        
    
    }
?>
    
  
    
</body>

   
</html>