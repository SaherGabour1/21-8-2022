<?php



session_start();

require 'connection.php';

if(isset($_SESSION['idnum'], $_SESSION['passwords'])) {


                            

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userlayout.css">


   
</head>
<body>
<?php include 'header.php'; ?>
   
<?php
    


      $sql = "SELECT * from users WHERE idnum = '$newidnum' AND usertype='patient'";
      $result = sqlsrv_query( $conn , $sql, array(), array("Scrollable" => 'static'));
	      $my_array = sqlsrv_fetch_array($result);
      
      if(isset($_SESSION['idnum']) && (sqlsrv_num_rows($result) > 0)){
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
.btn-button {
        text-align: center;
        display: flex;
        font-size: 25px;
        cursor: pointer;
        padding-left: 20%;
        padding-right: 6%;
        margin-top:2%;



} 



 
  .btn5 {

    border: 2px solid black;
    border-radius: 100px;
    padding: 0 20px;
    width: 40%;
    text-decoration: none;
    font-family: "Clarkson",Helvetica,sans-serif;
    padding: 0 60px;
    border-radius: 15px;
    font-size: xx-large;
    background-color : white;
  }

  .btn5:hover {
    background: #987565F3;
    
  }

 
  .btn3 {
    border: 2px solid black;
    border-radius: 100px;
    padding: 0 20px;
    width: 30%;
    text-decoration: none;
    font-family: "Clarkson",Helvetica,sans-serif;
    padding: 0 70px;
    border-radius: 15px;
    font-size: xx-large;
    background-color : white;
  }

  .btn3:hover {
    background: #ff9800;
   
  }

          </style>
      </head>
      <body>
          
          <div class="btn-button" >

           <a class="btn3" href="adv.php"> ?????????? ?????????? ????????</a> 
            <br></br>
            <a class="btn5" href="mypatientadv.php">?????????? ??????</a>

            </div>
        
      </body>
      </html>

      <?php
      }?>
      


      <?php
      $sql = "SELECT * from users WHERE idnum = '$newidnum' AND usertype='worker'";
      $result = sqlsrv_query( $conn , $sql, array(), array("Scrollable" => 'static'));
	      $my_array = sqlsrv_fetch_array($result);
      
      if(isset($_SESSION['idnum']) && (sqlsrv_num_rows($result) > 0)){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <style>
              
  .btn-button {
          text-align: center;
          display: flex;
      
          font-size: 25px;
          cursor: pointer;
          padding-left:18%;
          padding-right: 16%;
          margin-top:2%;
  
  }
  
  
  .btn4 {
      width: 40%;
      font-family: "Clarkson",Helvetica,sans-serif;
      padding: 0 60px;
      border-radius: 15px;
      font-size: xx-large;
      color: rgb(0, 0, 0);
      
    }
  
    .btn4:hover {
      background: #987565F3;
      color: white;
    }
  
  
   
    .btn5 {
      width: 40%;
      font-family: "Clarkson",Helvetica,sans-serif;
      padding: 0 60px;
      border-radius: 15px;
      font-size: xx-large;
      color: rgb(0, 0, 0);
    }
  
    .btn5:hover {
      background: #2196F3;
      color: white;
    }
  
   
    .btn3 {
      width: 30%;
      font-family: "Clarkson",Helvetica,sans-serif;
      padding: 0 70px;
      border-radius: 15px;
      font-size: xx-large;
      color: rgb(0, 0, 0);
    }
  
    .btn3:hover {
      background: #ff9800;
      color: white;
    }
  
            </style>
        </head>
        <body>
            <div class="btn-button" >
  
             <a class="btn3">  ???????????? ?????????? </a> 
              <br></br>
              <a class="btn5"> ?????????? </a>
              <br></br>
              <a class="btn4" href="adv.php"> ?????????? ?????????? ?????????? </a>
              </div>
          
        </body>
        </html>
  
        <?php
        }?>

    <?php
      $sql = "SELECT * from users WHERE idnum = '$newidnum' AND usertype='volnteer'";
      $result = sqlsrv_query( $conn , $sql, array(), array("Scrollable" => 'static'));
	      $my_array = sqlsrv_fetch_array($result);
      
      if(isset($_SESSION['idnum']) && (sqlsrv_num_rows($result) > 0)){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <style>
              
  .btn-button {
          text-align: center;
          display: flex;
      
          font-size: 25px;
          cursor: pointer;
          padding-left: 25%;
          padding-right: 6%;
          margin-top:2%;
  
  }
  
  

   
    .btn5 {
      width: 40%;
      font-family: "Clarkson",Helvetica,sans-serif;
      padding: 0 60px;
      border-radius: 15px;
      font-size: xx-large;
      color: rgb(0, 0, 0);
    }
  
    .btn5:hover {
      background: #987565F3;
      color: white;
    }
  
   
    .btn3 {
      width: 30%;
      font-family: "Clarkson",Helvetica,sans-serif;
      padding: 0 70px;
      border-radius: 15px;
      font-size: xx-large;
      color: rgb(0, 0, 0);
    }
  
    .btn3:hover {
      background: #ff9800;
      color: white;
    }
  
            </style>
        </head>
        <body>
            <div class="btn-button" >
  
             <a class="btn3" href="massege.php"> ????????????</a> 
              <br></br>
          
              <a class="btn5" href="testdate.php"> ?????????? ?????? ???????????? ??????????</a>
  
              </div>
          
        </body>
        </html>
  
        <?php
        }?>


    
   


        
        <section>
        <div class="container">
         <strong class="title">???????????? ????????????</strong>
        </div>
    
    
        <div class="profile-box box-left">

      <?php

       

          echo "<div class='info2'><strong>??????????:</strong> <span> $newphone</span></div>";
          echo "<div class='info0'><strong>??''??:</strong> <span>$newidnum</span></div>";
          echo "<div class='info1'><span> $newfname $newlname</span><strong>  :???? ??????</strong> </div>";
          echo "<div class='info3'> <span> $newemail</span> <strong> :???????? ????????????????</strong></div>";
          echo "<div class='info4'> <span> $newcity</span> <strong> : ??????????</strong> </div>";
          echo "<div class='info5'><strong> ?????? :</strong> <span> $newage</span></div>";
          
      ?>
      <br>
      <br>
      <br>
      
      <div class="options">
        <a class="btn2" href="editprofile.php">?????????? ???????????? ????????????</a>
        <a class="btn1" href="resetpasswords.html">?????????? ??????????</a>
        
      </div>

      
    </div>

  </section>





    </div>

        
    
</body>
</html>

<?php
      }

?>
