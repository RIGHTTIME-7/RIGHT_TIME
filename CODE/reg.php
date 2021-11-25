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
  $insertq="insert into reg(username,name,contact,state,district,lb,zip,pic)values('$_POST[email]','$_POST[name]','$_POST[ph]','$_POST[state]','$_POST[district]','$_POST[lb]',$_POST[zip],'$_POST[pic]')";
    //echo $insertq;
  $insertlog="insert into login values('$_POST[email]','$_POST[ph]','u')";

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
       window.location='reg.php'
   </script>;
   <?php
  }
}
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
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



input[type=text,email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  
  color: white;
  width: 40%;
  font-family: 'Raleway', sans-serif;
  font-size: 22px;
  text-transform:all;
}

.sel{

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #58D68D;
  color: white;
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
  color: white;
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
  border: none;
  background-color: #58D68D;
  color: white;
 width: 40%;
  font-family: 'Raleway', sans-serif;
 font-size: 22px;
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

</head>
<body>

<div class="container-fluid">




 <h4 class="display-4" align="center" style="font-size: 40px;">User Registration</h4>
 <center>
 	 <div id="bt">


<p class="text-danger"><?php echo $message; ?></p>
<div class="modal-body">
<form method="post" action="">
<div class="form-group">
<input type="text" name="name" class="form-control" required placeholder="Full Name" required />

</div>
<div class="form-group">
               <input type="email" class="sel" name="email" class="form-control" required placeholder="email" required/>
</div>

<div class="form-group">
               <input type="text" name="ph" class="form-control" required placeholder="Contact Number" required />
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
<div class="form-group">
 <input type="submit" name="sub" class="btn btn-info" value="Register" style="width: 40%;"  required/>
</div>
<div align="center">
 <a href="register.php" style="visibility: hidden;">Register</a><br>

<i class="fa fa-h-square" style="font-size:60px;color:#58D68D" align="center"></i>

</div>
</form>

</div>
</center>


</body>
</html>
