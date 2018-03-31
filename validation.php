<?php

if (isset($_POST["submit"]))
{
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		
		$conn = mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('aaa movie library') or die("Cant connect database");
		
		$query = mysql_query("select * from login where username='".$user."'and password='".$pass."'");
		
		$numrows = mysql_num_rows($query);
		
		if($numrows!=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
				$dbusername=$row['username'];
				$dbpassword=$row['password'];
			}
			
			if($user == $dbusername && $pass ==$dbpassword)
			{
				session_start();
				$_SESSION['sess_user']=$user;
				
				echo "Login success";
			}
			
		}else{
			echo "Invalid username or password";
		}
	}else{
		echo "All fields are required";
	}
}		

?>