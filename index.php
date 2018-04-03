<html>
<head>
<title> AAA Movie Library </title>
</head>
<style>
h3{
	text-align:center;
	font-family:Arial;
	font-size:30px;
}
form{
	text-align:center;
	font-family:Verdana;
	font-size:18px;
}
</style>
<body>
<h3> Login </h3>
<form action="" method="post">
  Username:<br>
  <input type="text" name="username"><br>
 
  Password:<br>
  <input type="text" name="password"><br>

<input type="submit" value="Login" name="submit" />  
</form>

<?php  

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "aaa movie library";
	
	$conn = new mysqli($dbhost,$dbhost,'',$dbname) or die ($conn->connect_error);
	return $conn;
	
}

if(isset($_POST["submit"]))
{  
  
	if(!empty($_POST['username']) && !empty($_POST['password'])) 
	{  
		$user=$_POST['username'];  
		$pass=$_POST['password'];  
  
		$conn=Connect(); 
  
		$query=mysql_query("SELECT * FROM login WHERE username='".$username."' AND password='".$password."'");  
		$numrows=mysql_num_rows($query);  
		if($numrows!=0)  
		{  
			while($row=mysql_fetch_assoc($query))  
			{  
			$dbusername=$row['username'];  
			$dbpassword=$row['password'];  
			}  
  
		if($user == $dbusername && $pass == $dbpassword)  
		{  
			session_start();  
			$_SESSION['sess_user']=$user;  
  
			/* Redirect browser */  
			header("Location: t.php");  
		}  
    } else {  
		echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>
</html>