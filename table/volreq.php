<?php
session_start();

require("db.class.php");
include("adminheader.php");
$userid=$_SESSION['userid'];
//$id=$_GET['id'];
//$id=1;
//$userid='aliyasthomas@gmail.com';
$ob=new db_operations();
$select="select * from registration where email in (select username from volunteer where verified=0)";
//echo $select;

$userinfo=$ob->db_read($select);
$userinfo2=mysqli_fetch_array($userinfo);

 ?>



<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.10, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.10, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  <title>RightTime</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
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

  <div id="logo" style="z-index: 1;">

  <div id="main" style="visibility: hidden;">

<section class="engine"><a href="https://mobirise.info/w">free html5 templates</a></section><section class="section-table cid-rdMFDnAcbe" id="table1-9">



  <div class="container container-table">
      <h4 class="mbr-section-title mbr-fonts-style align-center pb-3 display-3">
          Volunteer Requests
      </h4>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">

      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>

              <tr class="table-heads ">




              <th class="head-item mbr-fonts-style display-7">
                      Name</th><th class="head-item mbr-fonts-style display-7">
                      Email</th><th class="head-item mbr-fonts-style display-7">
                      Contact Number</th>
                      </th><th class="head-item mbr-fonts-style display-7">
                      Address</th><th class="head-item mbr-fonts-style display-7">
                      Documents</th><th class="head-item mbr-fonts-style display-7">
                      Action</th></tr>
            </thead>

            <tbody>


              <?php
              for($i=1;$i<mysqli_num_rows($userinfo);$i++)
              {
                 $data=mysqli_fetch_assoc($userinfo);
                 $u=$data['username'];
                 $ne="select * from volunteer where username='$u'";
                 $re=$ob->db_read($ne);
                 $user2=mysqli_fetch_array($re);
                ?>



           <tr>




              <td class="body-item mbr-fonts-style display-7">
             <?php echo $data['name'];?>
           </td><td class="body-item mbr-fonts-style display-7"><?php echo $data['username'];?>
           </td>
         </td><td class="body-item mbr-fonts-style display-7"><?php echo $data['phone'];?></td><td class="body-item mbr-fonts-style display-7"><?php echo $data['localbody'];?><br><?php echo $data['district'];?><br><?php echo $data['state'];?><br><?php echo $data['zip'];?>
         </td><td class="body-item mbr-fonts-style display-7"><a href="<?php echo 'http://localhost/righttime/uploads/'.$user2['doc'];?>"><button type="button" class="btn btn-info">view documents</button>
         </td><td class="body-item mbr-fonts-style display-7"><a href="admit.php?id=<?php echo $user2['username'];?>"><button type="button" class="btn btn-info">Approve</button>
         <a href="reject.php?id=<?php echo $user2['username'];?>"><button type="button" class="btn btn-info">Reject</button>

             </td></tr>

            <?php
          }
          ?>






              </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
