<!DOCTYPE html>
<html lang="en">
<head>
  <title>דוח בדיקות התורמים</title>
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
    <h2 class="middle-title">דוח בדיקות  התורמים
                 </h2>
    <br></br>

              <table class="table table-dark table-striped" >
                <thead>
                  <tr class="tr1" >
                    
                    <th> </th>
                    <th>שעה בדיקה</th>
                    <th>תאריך בדיקה</th>
                    <th>טלפון</th>
                    <th>ת"ז</th>
                    <th>שם מלא </th>    
                   </tr>
                </thead>
                <tbody>
                <?php
                            require ('connection.php');
                            $query = sqlsrv_query($conn,"SELECT * FROM Test ");

                            while($row =sqlsrv_fetch_array($query)){

                               
                                $newthour    =  $row['TestHour'];
                                $newtdate = $row['TestDate'];
                                $newtphone  =$row['Testuserphone'];
                                $newtuserid  = $row['Testuserid'];
                                $newtfname  = $row['Testfullname'];
                        ?>
                    <tr>
                    <form action="deletebtnlist.php" method="POST" >    
                    <td>  <button class="a3" name="deletbtn3">למחוק </button>
                            </form>
                </td>
                      <td><?php echo $newthour ;?></td>
                      <td><?php echo  $newtdate;?></td>
                      <td><?php echo  $newtphone;?></td>
                      <td><?php echo  $newtuserid;?></td>
                      <td><?php echo  $newtfname;?></td>
                     

                  </tr>
                  
                  
                        <?php } ?>
      
                </tbody>
                                       

</body>

</html>