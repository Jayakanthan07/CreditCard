<?php

include("includes/config.php");


$username='';$password='';$email='';$checkbox='';$message='';

if(isset($_POST['submit']))
{
	$username=$_REQUEST['uname'];
    $password=$_REQUEST['pass'];
    if(empty($username)){

    }
    else{
    mysqli_query($con,"INSERT into user2 (username,password) VALUES('$username','$password')");
     }
	//$checkbox=isset($_POST['check']);
	/*if(user_exists($username,$con)){
		$password=mysqli_query($con,"SELECT password from user1 WHERE username='$username'");
		$pass_w=mysqli_fetch_array($pass);
		$dpass=$pass_w['pass'];
    }
		if($password!==$dpass){
			$message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
		}
		/*else{
            $_SESSION['username']=$username;
        }*/
		/*	if($checkbox=='on'){
				setcookie('name',$username,time()+300);
			}
			header("location:profile.php");
			
			
		}*/
	
	
}
?>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body{
    margin: 0;
    padding: 0;
    background: url("visa card.jpg");
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;

    border-radius:11px;
    opacity:0.8;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}</style>


<body>
<form method='POST' action="login2.php">
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form >
            <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="lostpwd.html">Lost your password?</a><br>
            <a href="signup.html">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>
