  <?php

      require("db.class.php");
      session_start();
      $ob=new db_operations();
      /*$contact=$_POST['number'];*/
        /*$name=$_POST['name'];*/

    $user=$_SESSION['userid'];

    $date=date("d/m/y");

    $insertq="insert into requests(username,resource,category,qty,priority,date,verified,closed)values('$user','$_POST[resource]','$_POST[cat]',$_POST[q],$_POST[p],'$date',0,'0')";


    $ob=new db_operations();
    $selr=$ob->db_write($insertq);




    if($selr)
    {

      ?>
     <script>
         alert("Requested For Resource");
         window.location='dashboard.php'
     </script>;
     <?php
    }


  ?>
