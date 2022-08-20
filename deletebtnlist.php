<?php 

  session_start();

  require 'connection.php';
  require 'functions.php';


        
        if(isset($_POST['deletbtn1'])) {
            $newfname =clean($_POST['fname']);
            $newage =clean($_POST['lname']);
            $newphone =clean($_POST['phone']);
            $newage =clean($_POST['age']);
            $newidnum =clean($_POST['idnum']);
            $newcity =clean($_POST['city']);
            $newemail =clean($_POST['email']);
           

            $query = "DELETE FROM users where idnum=$newidnum";
            if($result = sqlsrv_query($conn, $query)) {

        
        header("location:listvolanteer.php");
            exit;
            }
        }
        if(isset($_POST['deletbtn2'])) {
            $newfname =clean($_POST['fname']);
            $newage =clean($_POST['lname']);
            $newphone =clean($_POST['phone']);
            $newage =clean($_POST['age']);
            $newidnum =clean($_POST['idnum']);
            $newcity =clean($_POST['city']);
            $newemail =clean($_POST['email']);
           

            $query = "DELETE FROM users where idnum=$newidnum";
            if($result = sqlsrv_query($conn, $query)) {

        
        header("location:listpatient.php");
            exit;
            }
        }



        if(isset($_POST['deletbtn3'])) {
            $newfullname =clean($_POST['fname']);
            $newuserid =clean($_POST['id']);
            $newuserphone =clean($_POST['phone']);
            $newtestdate =clean($_POST['date']);
            $newtesthour =clean($_POST['time']);
      
           

            $query = "DELETE FROM Test where Testuserid=$newuserid";
            if($result = sqlsrv_query($conn, $query)) {

        
        header("location:listpatienttest.php");
            exit;
            }
        }
    ?>
    
