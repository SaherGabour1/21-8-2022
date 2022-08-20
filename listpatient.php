<!DOCTYPE html>
<html lang="en">
<head>
  <title>דוח חולה</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="list.css">
</head>
<body>

    <div class="main" >
              <nav>
                  <div class="logo">
                      <img src="Picture3.png" > 
                  </div>
                  <div class="nav-links" >
                      <ul>
    
                          <li><a href="contact2.html" >צור קשר </a></li>
                          <li><a href="patientadver2.php" >רשימת חולים</a></li>
                          <li><a href="hospital2.html" >בית חולים </a></li>
                          <li><a href="home2.html" >דף בית </a></li>
                      </ul>
                  </div> 
                  <div class="back" >
              <a href="userlayout.php" >איזור אישי </a></a>
              </div>
    
      </nav> 
    
      <div class="logout" >
          <a href="home.html" >יציאה </a></li></a>
          </div>
    
    
              <hr width="70%" > 
              <br>
    
    <br>
    <h2 class="middle-title">דוח החולים
                 </h2>
    <br></br>

              <table class="table table-dark table-striped" >
                <thead>
                  <tr class="tr1" >
                    <th> </th>
                    <th>מייל</th>
                    <th>גיל</th>
                    <th>ישוב</th>
                    <th>טלפון</th>
                    <th>ת"ז</th>
                    <th>שם משפחה</th>
                    <th>שם פרטי </th>    
                   </tr>
                </thead>
                <tbody>

                <?php
                            require ('connection.php');
                            $query = sqlsrv_query($conn,"SELECT * FROM users where usertype='patient'");

                            while($row =sqlsrv_fetch_array($query)){

                                $newemail  =  $row['email'];
                                $newage    =  $row['age'];
                                $newcity = $row['city'];
                                $newphone  =$row['phone'];
                                $newidnum  = $row['idnum'];
                                $newlname  =   $row['lname'];
                                $newfname  =$row['fname'];
                        ?>
                    <tr>
                    <form action="deletebtnlist.php" method="POST" >   
                    <td>  <button class="a3" name="deletbtn2">למחוק </button>
                            </form></td>
                      <td><?php echo $newemail; ?></td>
                      <td><?php echo $newage  ;?></td>
                      <td><?php echo $newcity ;?></td>
                      <td><?php echo  $newphone;?></td>
                      <td><?php echo  $newidnum;?></td>
                      <td><?php echo  $newlname;?></td>
                      <td><?php echo  $newfname;?></td>
                     
                    
                     

                  </tr>
                  
                        <?php } ?>
                 



                </tbody>
                       

</body>
</html>