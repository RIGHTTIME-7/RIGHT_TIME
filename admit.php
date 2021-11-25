<?php
session_start();

require("db.class.php");
$id=$_GET['id'];
$userid=$_SESSION['userid'];
//$id=$_GET['id'];
//$id=1;
//$userid='aliyasthomas@gmail.com';
$ob=new db_operations();
$select="update volunteer set verified=1 where username='$id'";


$userinfo=$ob->db_write($select);
//$userinfo2=mysqli_fetch_array($userinfo);
if($userinfo)
{


  ?>
  <script>
    alert("Approved");
    window.location='volreq.php'
  </script>;
  <?php
  }
 ?>
