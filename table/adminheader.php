<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
</head>
<body>

<div class="header">
  <a href="#default" class="logo"></a>
  <div class="header-right">
<a href="admin.php"><h5 class="display-5"  style="font-size: 20px;">|Dashboard|</h5></a>
<a href="volreq.php"><h5 class="display-5"  style="font-size: 20px;">|Volunteer Request|</h5></a>
<a href="servreq.php"><h5 class="display-5"  style="font-size: 20px;">|Service Request |</h5></a>
<a href="user.php"><h5 class="display-5"  style="font-size:20px;">|Registered Users|</h5></a>
<a href="vol.php"><h5 class="display-5"  style="font-size: 20px;">|Approved Volunteers|</h5></a>
<a href="../logout.php"><h5 class="display-5"  style="font-size: 20px;">|LogOut|</h5></a>

  </div>
  <div class="header-left">
<h4 class="display-4"  style="font-size: 40px;">RightTime</h4>

  </div>




</div>


</body>
</html>
