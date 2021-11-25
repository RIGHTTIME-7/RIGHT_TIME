<?php
session_start();

require("db.class.php");

$userid=$_SESSION['userid'];
$reqid=$_GET['id'];
//$userid='aliyasthomas@gmail.com';
$ob=new db_operations();
$date=date("d/m/y");
$select="insert into responses values('$userid',$reqid,'$date')";


$info=$ob->db_write($select);
if($info)
{


?>
<script>
alert("Great thing! You Succesfully Responded");
window.location='dashboard.php'
</script>;
<?php
}


 ?>
