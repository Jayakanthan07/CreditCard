<?php
/*if(isset($_POST['submit'])){
	$email=$_POST['mail'];
	//$username=$_POST['uname'];
	$password=$_POST['pass'];
	//$c_password=$_POST['repass'];
	if(user_exists($username,$con)){
		$email1=mysqli_query($con,"SELECT email from users WHERE user_name='$username'");
		$pass_w=mysqli_fetch_array($email1);
		$mail=$pass_w['email'];		
				if($mail!==$email){
				$message1= "Email does not match with the records.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message1');</script>";
		}
	}
if($c_password!==$password){
		$message = "Password does not match.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $password='';$c_password='';
	}
	//else{
		mysqli_query($con,"UPDATE users SET pass='$password'");
			$message2= "Password is update successfully.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message2');</script>";
  $username='';$email='';$password='';$c_password='';
	//}
	
}*/

include("includes/config.php");


$username='';$password='';$email='';$checkbox='';$message='';

if(isset($_REQUEST['submit']))
{
	$email=$_REQUEST['mail'];
    $password=$_REQUEST['pass'];
    if(empty($email)){

    }
    else{
    mysqli_query($con,"INSERT into user1 (mail,password) VALUES('$email','$password')");
     }


}

?>


<html>
<head>
<title>Lost pwd</title>
</head>

<style>
body{
    margin: 0;
    padding: 0;
    background: url("creditcards.jpg") center no-repeat fixed;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.pwdbox{
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

.pwdbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.pwdbox input{
    width: 100%;
    margin-bottom: 20px;
}

.pwdbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.pwdbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.pwdboxbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.pwdbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.pwdbox a:hover
{
    color: #ffc107;
}
</style>
<body>
<form id="pwd">
<div class="pwdbox">
<h1>Lost your password</h1>
<img src="avatar.png" class="avatar">
<form>
<p>EMAIL</p>
<input type="text" name="mail" placeholder="enter the valid mail id">
<p>PASSWORD</p>
<input type="password" name="pass" placeholder="enter the password">
<input type="submit" name="submit" value="login">
</form>
</div>
</body>


</html>
