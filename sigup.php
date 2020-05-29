<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;
 background:black;}
* {box-sizing: border-box}

input[type=text], input[type=password] {
  width: 70%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
 h1 { color: #ffffff; }
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
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

button{
  width:60%;
  color:#fff;
  display:block;
}
button{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
button{
  background:#1161ee;
}

.container {
  padding: 16px;
}


@media screen and (max-width: 300px) {
  /*.signupbtn {
     width: 10%;
  }
  */
}
</style>
<body>
<div class="login-wrap">
<form action="signup1.php" method="POST"  > 
  <div class="container" align="center">
    <h1>Sign Up</h1>
  
    <hr>

    <input type="text" placeholder="username" name="username" required>
    <br>
    
    <input type="password" placeholder="password" name="password" required>
    <br>
    
    <input type="password" placeholder="Reenter password" name="psw-repeat" required>
    <br>
    
    <br><br>

    <div class="clearfix" align="center">
      <button type="submit" class="signupbtn" >Sign Up</button>

    </div>
  </div>
</form>
</div>
</body>
</html>
