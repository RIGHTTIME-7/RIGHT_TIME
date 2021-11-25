<?php
session_start(); ?>
<html lang="en">
<head>
  <?php
  $message="";
  if(isset($_POST['sub']))
  {
    require("db.class.php");
    $ob=new db_operations();
    /*$contact=$_POST['number'];*/
      /*$name=$_POST['name'];*/

   $email=$_POST['email'];
   $_SESSION['userid']=$_POST['email'];
    $insert1= "select * from login where username='$email'";

    $resr=$ob->db_read($insert1);
        if(mysqli_num_rows($resr)==0)
        {


          ?>
          <script>
            alert("Can't Find User");
            window.location='login.php'
          </script>;
          <?php
          }
          else
          {

              $result=mysqli_fetch_array($resr);
       if($result['password']==$_POST['ph'])
       {

                 if($result['type']=='A')
               {
       ?>
       <script>

         window.location='table/admin.php'
       </script>;
       <?php
     }




     if($result['type']=='v')
   {

  $volunteer= "select * from volunteer where username='$email'";
    $resr=$ob->db_read($volunteer);
    $resr2=mysqli_fetch_array($resr);
    if($resr2[verified]==0)
    {


?>
<script>
alert("Youre account is subjected to verification");
window.location='login.php'
</script>;
<?php
}

if($resr2[verified]==-1)
{


?>
<script>
alert("youre account has been blocked by admin");
window.location='login.php'
</script>;
<?php
}

else {
  ?>
  <script>

  window.location='dashboard.php'
  </script>;
  <?php
}
}

    if($resr2[verified]==1) {
          ?>
          <script>

            window.location='dashboard.php'
          </script>;
          <?php
        }

     }
       else {
         ?>
         <script>
          alert("Invalid UserName or Password")
          $message="invalid Username or password";
           window.location='login.php'
         </script>;
         <?php
       }

            ?>
            <script>

              window.location='dashboard.php'
            </script>;
            <?php
          }

        }


$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
?>
  <title>RightTime</title>
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


.sel{

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: solid lighblue;
  background-color: #58D68D;

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


   <div class="w3-container w3-center w3-animate-top">
    <div style="padding-left: -0px;">
     <img src="tlogo.png" height="50%">
   </div>

 </div>
 <h4 class="display-4" align="center" style="font-size: 40px;">RightTime</h4>
 <center>
 	 <div id="bt" style="visibility: hidden;">


<p class="text-danger"><?php echo $message; ?></p>
<center>
          <form method="post" action="">
            <div class="form-group">

              <input type="text" name="email" class="form-control" required placeholder="Username" />
            </div>
            <div class="form-group">
                            <input type="password" name="ph" class="form-control" required placeholder="Password" />
            </div>
            <div class="form-group">
              <input type="submit" name="sub" class="btn btn-info" value="Login" style="width: 40%;" />
            </div>
            <div align="center">
              <a href="register.php" style="visibility: hidden;">Register</a><br>



            </div>
          </form>


</div>
</center>


</body>
</html>
