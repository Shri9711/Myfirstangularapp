<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"banking");
?>


<!doctype html>
<html>
<head>
<title>Quickpay.com</title>
<link rel="stylesheet" type="text/css" href="frontpage1.css">
</head>
<style>


</style>
<script>
  function validation() {
      var x = document.forms["front"]["uname"].value;
      var y = document.forms["front"]["psw"].value;
      if ( x == "")
      {
        alert("please fill the userrname");
          return false;
      }
      if ( y == "")
      {
        alert("please fill the userrname");
        return false;
      }

  }
</script>

<body>
<form action="reg_form.php" name="front" onsubmit="return validation()" method="POST" >
<div style="background-color:skyblue;text-align:center;color:red;font-size:50px;line-height:1">
 <p>
    <hr><b><i>Quick<sub>pay</sub></b></i><hr><div style="font-color:white;font-size:20px;text-align:right"><marquee>Welcome to our NET BANKING Services</marquee></div>
    <div style="background-color:orange;line-height:1;text-align:right">
    <button onclick="window.location.href = 'frontpage.php';" >HOME</button>
    <button  onclick="window.location.href = 'reg_form.php';" >REGISTER</button>
    <button onclick="window.location.href = 'contactus.php';">CONTACT US</button>
    <button onclick="window.location.href = 'help.php';">HELP</button>
    </div>
</p>
</div>
<div>
<div class="box"> 
 <div class="box1">
  <div style="background-color:lightyellow;text-align:center;color:red;font-  size:30px;line-height:2">SEC_RITY is not complete without U!
  </div>
  <div style="color:tomato;font-size:30px;"><marquee direction="up"       behavior="alternate" hspace="30px" vspace="10px"  ><ul><li>Create strong passwords &     change them     regularly</li><br><li>Use a secure location / sites / network when     banking   online</li><br>
  <li>Always Log Out</li><br><li>Enable multi-factor   authentication</li><br><li>Beware of   email scams</li><br><li>Only Use Official Banking   Apps</li></ul></marquee>
  </div>
 </div>
 <div class="box2">Login to Continue..
    <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname"required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>
      <label >  
    <input type="Submit" onclick="window.location.href = 'main.php';"  name="Submit" value="login">
    </label>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
 </div>
</div>

</div>

 <?php

if(isset($_POST["login"])) {
  echo "Login Successfully";  
      $que = "insert into logers(Username,Password) values('$_POST[uname]','$_POST[psw]'  )";
    mysqli_query($conn, $que);
  }
?>


</form>
</body> 
</html>