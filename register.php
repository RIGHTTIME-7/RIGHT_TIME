<?php
include("header.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php

    $message="";

    $i=0;
    if(isset($_POST['sub']))
    {
      require("db.class.php");
      $ob=new db_operations();
      /*$contact=$_POST['number'];*/
        /*$name=$_POST['name'];*/

    // $_SESSION['userid']
    $i++;
    $insertq="insert into registration(username,name,phone,state,district,localbody,zip)values('$_POST[email]','$_POST[name]','$_POST[ph]','$_POST[state]','$_POST[district]','$_POST[lb]',$_POST[zip])";
      //echo $insertq;
    $insertlog="insert into login values('$_POST[email]','$_POST[password2]','u')";

    $select="select * from login where username='$_POST[email]'";
    $ob=new db_operations();
    $selr=$ob->db_read($select);
    echo mysqli_num_rows($selr);
    if((mysqli_num_rows($selr))>0)
    {


      ?>
  <script>
   alert("user already exists");
   window.location='register.php'
  </script>;
  <?php


    }
    if((mysqli_num_rows($selr))==0){
    $res=$ob->db_write($insertq);
    //echo $insertq;
    //echo $res;
    //echo $insertlog;
    if($res)
    {
      $res2=$ob->db_write($insertlog);
    }
    if(($res)&&($res2))
    {
      $ob->db_write($inserttest_part);
      ?>
     <script>
         alert("Succesfully Registered");
         window.location='register.php'
     </script>;
     <?php
    }
  }
  }







$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
?>
  <title>RightTime Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
.button {
  background-color: #4CAF50; /* Green */
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
  width: 200px;
  font-family: 'Raleway', sans-serif;
}

.button2 {background-color: #008CBA;}



input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border:  solid lightblue;


  width: 40%;
  font-family: 'Raleway', sans-serif;
  font-size: 22px;
  text-transform: all;
}




input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border:  solid lightblue;


  width: 40%;
  font-family: 'Raleway', sans-serif;
  font-size: 22px;
  text-transform: all;
}

input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border:  solid lightblue;

  color: black;
  width: 40%;
  font-family: 'Raleway', sans-serif;
  font-size: 22px;
  text-transform: all;
}


.sel{

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: solid lighblue;
  background-color: #58D68D;
  color: black;
  width: 40%;
  font-family: 'Raleway', sans-serif;
  font-size: 22px;

  text-transform: all;
  }

input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #58D68D;
  color: black;
  width: 40%;
  font-family: 'Raleway', sans-serif;
  font-size: 22px;
  text-transform: all;
}



::placeholder {
  color: red;
}
::-webkit-input-placeholder { /* Edge */
  color: red;
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: red;
}

</style>
<script>





function initialSetup() {

    setTimeout(function() {
      document.getElementById('sp').style.visibility ='hidden';
    }, 2000)

    setTimeout(function() {
      document.getElementById('bt').style.visibility ='visible';
    }, 2000)
}

initialSetup();

</script>
</head>
<body style="overflow: hidden;">

<div class="container-fluid">

  <div style="visibility: visible;" id="sp">
<div class="w3-row" style="padding-left: 20px;">
  <div class="w3-container w3-center w3-spin">
     <i class="fa fa-spinner" style="font-size:100px;color:#58D68D" align="center"></i>
 </div>
</div>
</div>


 <h4 class="display-4" align="center" style="font-size: 40px;">User Registration</h4>
 <center>
 	 <div id="bt" style="visibility: hidden;">


<p class="text-danger"><?php echo $message; ?></p>
          <form method="post" action="">
            <div class="form-group">
           <input type="text" name="name" class="form-control" required placeholder="Full Name" required />

            </div>
            <div class="form-group">
                            <input type="email"  name="email" class="form-control" required placeholder="email" required/>
            </div>

            <div class="form-group">
                            <input type="text" name="ph" class="form-control" required placeholder="Contact Number" required minlength='13' />
            </div>
            <div class="form-group">
                            <input type="text" name="state" class="form-control" required placeholder="State" required />
            </div>

            <div class="form-group">
                            <input type="text" name="district" class="form-control" required placeholder="District" required />
            </div>

            <div class="form-group">
                            <input type="text" name="lb" class="form-control" required placeholder="Local Body" required/>
            </div>
            <div class="form-group">
                            <input type="text" name="zip" class="form-control" required placeholder="zip Code" required />
            </div>
            <script>
            var check = function() {
              if (document.getElementById('p1').value ==
                document.getElementById('p2').value) {
                document.getElementById('msg').style.color = 'green';
                document.getElementById('msg').innerHTML = 'Passwords matching';
                document.getElementById('butt').style.visibility='visible';
              } else {
                document.getElementById('msg').style.color = 'red';
                document.getElementById('msg').innerHTML = 'Passwords not matching';
              }
            }
            </script>

            <div class="form-group">
                            <input type="password" name="password" id="p1" class="form-control" required placeholder="Password" required minlength='6' onkeyup="check()"/>
            </div>
            <div class="form-group">
                            <input type="password" name="password2" id="p2" class="form-control" required placeholder="Confirm Password" required minlength='6' onkeyup="check()" />
            </div>
            <div id="msg">

            </div>
            <div class="form-group">
              <input type="submit" id="butt" style="visibility:hidden" name="sub" class="btn btn-info" value="Register" style="width: 40%;"  required/>
            </div>
            <div align="center">
              <a href="register.php" style="visibility: hidden;">Register</a><br>



            </div>
          </form>


</div>
</center>


</body>
</html>
