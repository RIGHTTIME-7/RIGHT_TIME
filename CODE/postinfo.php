<?php

    require("db.class.php");
    session_start();
    $ob=new db_operations();
    /*$contact=$_POST['number'];*/
      /*$name=$_POST['name'];*/

  $user=$_SESSION['userid'];

  $date=date("d/m/y");

  $insertq="insert into emergency(username,description,category,pic,date)values('$user','$_POST[des]','$_POST[cat]','$_POST[pic]','$date')";
echo $insertq;

  $ob=new db_operations();
  $selr=$ob->db_write($insertq);




  if($selr)
  {

    ?>
   <script>
       alert("Posted Succesfully");
       window.location='dashboard.php'
   </script>;
   <?php
  }


?>
