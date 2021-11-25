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
    </div>
    <div class="header-right">

      <a class="dashboard.php" href="logout.php">Around ME</a>
      <a class="active" href="emergency.php">Emergency Requests</a>
      <a href="requests.php">Requests</a>
        <a href="myrequests.php">My Requests</a>
      <a href="table/contributions.php">My Contributions</a>
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

        $q="select * from requests where priority=1 and closed= '0' and id not in(select id from responses where username='$userid') ";
        //echo $q;


        $res=$ob->db_read($q);
        $count=mysqli_num_rows($res);

        if(!$count)
        {
          $ms="No Contents Yet";
            $ms2="hidden";?>
            <h3 class="style-4"><?php echo $ms;?></h3>
            <a data-toggle="modal" data-target="#myModal" class="btn scroll"><button>Need Emergency help?</button></a>


            <?php
        }
        for($i=0;$i<$count;$i++)
        {
             $result=mysqli_fetch_assoc($res);
             $requser="select * from registration where username='$result[username]'";
             //echo $requser;
               $res3=$ob->db_read($requser);
               $data3=mysqli_fetch_array($res3);

             //if($result['type']=="Vedio")
             //$img="vdio.png";
             //if($result['type']=="Image")
             //$img="img.png";
             //if($result['type']=="Document")
             //$img="doc.jpg";



        ?>
				<div class="col-lg-4 col-md-6 course-grid" style="visibility:<?php echo $ac;?>">
					<div class="course-grid-inf">
						<a href="#"><i style="font-size:100px;color:#1E90FF" ;="" class="fa fa-file" aria-hidden="true"></i></a>
            <div class="course-content">
              <div class="course-info">
                <h3><a class="course-title" href="#"><?php echo $result['resource'];?>(<?php echo $result['qty'];?>)</a></h3>

                  <h5 class="course-instructor"><?php echo $data3['name'];?></h5>
                    <h5 class="course-instructor"><?php echo $data3['localbody'];?>,<?php echo $data3['district'];?>,<?php echo $data3['zip'];?></h5>

              </div>
              <div class="course-divider">
                <div class="course-meta grid"><span class="course-students" title=""><span
                      class="fa fa-user" aria-hidden="true"></span> <?php echo $result['date'];?></span>
                  <span class="course-reviews" title="">

                </div>
              <a href="accept.php?id=<?php echo $result['id']?>"><button class="price-course btn"> Accept </button></a>
              </div>
						</div>
					</div>
				</div>
        <br>

  <div class="card bg-danger text-white" style="visibility:<?php echo $ms2;?>">
    <div class="card-body"><a  data-toggle="modal" data-target="#myModal" class="btn scroll">Need Emergency help?</a></div>
  </div>
  <?php
  }
  ?>
  </div>


  	</div>
			<!-- //pagination-->
		</div>

	</div>

</section>


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
