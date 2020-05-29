<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body {
  background:black;
  background-position: top;
   background-attachment: scroll;

}
/*form {border: 3px solid #FFFFFF ;}*/

input[type=text], input[type=password] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:   #0000ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.login-wrap{
  width:100%;
  margin:auto;
  margin-top: 30px;
  max-width:425px;
  min-height:570px;
  position:relative;
  background-image:url("smoke1.jpg");


  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 10%;
  }
h2 { 
  display: block;
  font-size: 5.4em;
  margin-top: 0.83em;
  margin-bottom: 0.83em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}
}
</style>
</head>
<body>
<div class="login-wrap">
<font color="white"><h1 align="center">
<br>Login</h1></font>

<form action="login1.php" method="post">

  <div class="container" align="center">
    <font color="white" size="4">
    <input type="text" placeholder="username"  name="username">
    <br>
  <font color="white" size="4">
    <br>
    <input type="password" placeholder="password" name="password">
    <br>  
    <br>
    <button type="submit" >Sign in</button>
     <br>
     <font color="black" size="4">
     <a href="sigup.php">new user?</a></font>
     <font color="white" size="4">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label></font>
  </div>
 <br>
  <div class="container" style="background-image:wall.jpg" align="center">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>

<?php
session_start();
if(isset($_SESSION['invalid']))

session_destroy();
?>



</body>
</html>
