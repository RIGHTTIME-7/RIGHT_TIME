<?php

    require("db.class.php");
    $ob=new db_operations();
    /*$contact=$_POST['number'];*/
      /*$name=$_POST['name'];*/

  $user=$_SESSION['userid'];

  $date=date('d/m/y');
  $id=$_GET['id'];
  $insertq="update requests set closed='$date' where id=$id";


  $ob=new db_operations();
  $selr=$ob->db_write($insertq);




  if($selr)
  {

    ?>
   <script>
       alert("Closed");
       window.location='dashboard.php'
   </script>;
   <?php
  }


?>
