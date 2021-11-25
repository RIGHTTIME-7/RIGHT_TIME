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
    </div>


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
