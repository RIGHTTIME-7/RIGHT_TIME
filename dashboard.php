<?php
session_start();

require("db.class.php");

$userid=$_SESSION['userid'];
//$userid='aliyasthomas@gmail.com';
$ob=new db_operations();
$select="select * from registration where username='$userid' ";


$userinfo=$ob->db_read($select);
$userinfo2=mysqli_fetch_array($userinfo);

 ?>
<html lang="en">
<head>
  <title>RightTime</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Muli:300,300i,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,900&display=swap" rel="stylesheet">
<style>


 .avatar-circle {
  width: 100px;
  height: 100px;
  background-color:#1E90FF;
  text-align: center;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
}


.initials {
  position: relative;
  top: 25px; /* 25% of parent */
  font-size: 50px; /* 50% of parent */
  line-height: 50px; /* 50% of parent */
  color: #fff;
  font-family: "Courier New", monospace;
  font-weight: bold;
}

.sel{



  width: 100%;
  padding: 5.625px 11.25px;
  margin: 8px 0;
  box-sizing: border-box;
  border:  solid lightblue;

  color: white;
  width: 40%;
  font-family: 'Raleway', sans-serif;
  font-size: 22px;
  text-transform: all;


}

.but{ background-color: #d9534f; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
flex: 1;
cursor: pointer;

}
.but butt1{
  background-color:#008CBA;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }

  .header-right {
    float: none;
  }
}
</style>



<script language="javascript">




function initialSetup() {

    setTimeout(function() {
      document.getElementById('logo').style.visibility ='hidden';
    }, 2000)

    setTimeout(function() {
      document.getElementById('main').style.visibility ='visible';
    }, 2000)
}

initialSetup();
</script>
</head>
<body style="overflow: hidden;">
  <div class="header">
    <a href="#default" class="logo"></a>
    <div class="header-left">
    <a data-toggle="modal" data-target="#myModal" class="btn scroll"> <button type="button" class="btn btn-danger">Emergency Help</button></a>
      <a data-toggle="modal" data-target="#myModal2" class="btn scroll"> <button type="button" class="btn btn-info">Post info</button>
    </div>
    <div class="header-right">

      <a class="active" href="dashboard.php">Around ME</a>
      <a  href="emergency.php">Emergency Requests</a>
      <a href="requests.php">Requests</a>
        <a href="myrequests.php">My Requests</a>
      <a href="contributions.php">My Contributions</a>
      <a  href="logout.php">LogOut</a>

    </div>
  </div>
	<div id="logo" style="z-index: 1;">
<div class="w3-row" style="padding-left: 20px;">
	<div class="w3-container w3-center w3-spin">
     <i class="fa fa-spinner" style="font-size:100px;color:red;" align="center"></i>
 </div>
</div>
<div id="main" style="visibility: hidden;">
	<div class="container" align="center">
<?php

$lt=$userinfo2['name'];

$lt1=$lt[0].$lt[1];
$lt1=strtoupper($lt1);
 ?>
	<div class="avatar-circle">
  <span class="initials"><?php echo $lt1;?></span>

</div>
<div align="center">
	<h1 class="display-4"><?php echo $userinfo2['name'];?></h1>
</div>
<section class="w3l-services-2">

	<!-- /content-6-section -->
  <div class="services-2-mian py-5">
		<div class="container py-lg-5">

			<div class="row title-content">

				<div class="col-lg-4 title-left">

				</div>
				<div class="col-lg-8 title-info">

				</div>
			</div>

			<div class="welcome-grids row">
        <?php
        $msg="";
        $ac="";



        $q="select * from emergency";
        $res=$ob->db_read($q);
        $count=mysqli_num_rows($res);
        if(!$count)
        {

          $msg="No Contents Yet";
          $ac="hidden";
          ?>
          <h3>No Contents Yet</h3>
          <?php
        }
        for($i=0;$i<$count;$i++)
        {
             $result=mysqli_fetch_assoc($res);
            $n="select * from registration where username='$result[username]'";
            $info=$ob->db_read($n);
            $info2=mysqli_fetch_array($info);


        ?>
				<div class="col-lg-4 col-md-6 course-grid" style="visibility:<?php echo $ac;?>">
					<div class="course-grid-inf">
						<a href="#"><img height="50%" width="50%" src=<?php echo "uploads/".$result['pic'];?> class="img-fuild" alt="not found"></a>
            <div class="course-content">
              <div class="course-info">
                <h6><a class="course-instructor" href="#"><?php echo $info2['name'];?></a></h6>
                <a href="#" class="course-titlegulp-wrapper">
                  <h3 class="course-title"><?php echo $result['description'];?></h3>
                    <h5 class="course-title"><?php echo $result['category'];?></h5>
                </a>
              </div>
              <div class="course-divider">
                <div class="course-meta grid"><span class="course-students" title=""><span
                      class="fa fa-user" aria-hidden="true"></span> <?php echo $result['date'];?></span>
                  <span class="course-reviews" title=""><span class="fa fa-thumbs-o-up"
                      aria-hidden="true"></span> 14</span>

                </div>
            
              </div>
						</div>
					</div>
				</div>
      <?php
         }

      ?>

			<!-- //pagination-->
		</div>

	</div>

</section>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="exampleModalLongTitle">Post Emergency</h3>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<form method="post" action="postinfo.php">
 <div class="form-group">
<input type="text" name="des" class="form-control" required placeholder="Emergency Description" required />

 </div>
<div class="form-group">
<select name="cat" class="form-control">
<?php
$cat="select * from emertype";
$ex=$ob->db_read($cat);
for($i=0;$i<mysqli_num_rows($ex);$i++)
{
$li=mysqli_fetch_assoc($ex);

 ?>
<option name="<?php echo $li['category'];?>" value="<?php echo $li['category'];?>"><?php echo $li['category'];?></option>
<?php
} ?>
</select>

</div>
 <div class="form-group">
                 <input type="file" name="pic" class="form-control" required placeholder="Upload image" required />
 </div>



 <div class="form-group">
   <input type="submit" name="sub" class="btn btn-info" value="Post" style="width: 40%;"  required/>
 </div>
</form>


</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="exampleModalLongTitle">Request For Emergency Resources</h3>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<form method="post" action="makereq.php">
 <div class="form-group">
<input type="text" name="resource" class="form-control" required placeholder="Resource" required />

 </div>
<div class="form-group">
<select name="cat" class="form-control">
<?php
$cat="select * from resources";
$ex=$ob->db_read($cat);
for($i=0;$i<mysqli_num_rows($ex);$i++)
{
$li=mysqli_fetch_assoc($ex);

 ?>
<option name="<?php echo $li['category'];?>" value="<?php echo $li['category'];?>"><?php echo $li['category'];?></option>
<?php
} ?>
</select>

</div>
 <div class="form-group">
                 <input type="text" name="q" class="form-control" required placeholder="Quantity Or Value" required />
 </div>

 <div class="form-group">
                 <input type="text" style="visibility:hidden;" name="p" class="form-control" required placeholder="Quantity Or Value" value="1" />
 </div>

 <div class="form-group">
   <input type="submit" name="sub" class="btn btn-info" value="Request" style="width: 40%;"  required/>
 </div>
</form>


</div>
<table border=""></table>
</body>
</html>
