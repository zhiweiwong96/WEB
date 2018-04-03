<!doctype html>
<html>
<head>
<title>Login</title>
<style>
body{

    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    background-color: azure ;
    font-family: verdana;
    font-size: 100%
}
h3 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}
form{

    font-family: verdana;
    text-align: center;

}

</style>
</head>

<body>

  <script>

    function validationform(){
      var username = document.loginform.user.value;
      var password = document.loginform.pass.value;

      if(username==null || username==""){
        alert("Invalid Username Input");
        return false;
      }else if (password==null || password=="") {
        alert("Invalid Password Input");
        return false;
      }
    }
  </script>

<center><h1>LOGIN</h1></center>

<form name="loginform" action="adminLogin.php" method="POST" onsubmit="return validationform()">

  Username: <br>
  <input type="text" name="user" placeholder="Enter your username"><br>
  Password: <br>
   <input type="password" name="pass" placeholder="Enter your password"><br>

<input type="submit" value="Login" name="Login">
</form>


</body>
</html>
