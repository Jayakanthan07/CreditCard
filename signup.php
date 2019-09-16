<?php
 
include("includes/config.php");

$password='';$mail='';$remail='';$name='';$phone='';$street='';$city='';$country='';$gender='';$dob='';$nation='';$repass='';$branch='';$account='';$bank='';
if(isset($_POST['submit'])){
	$mail=$_REQUEST['mail'];
    $remail=$_REQUEST['remail'];
    $password=$_REQUEST['password'];
    $repass=$_REQUEST['repass'];
    $name=$_REQUEST['name'];
    $phone=$_REQUEST['phone'];
    $street=$_REQUEST['street'];
    $city=$_REQUEST['city'];
    $dob=$_REQUEST['dob'];
    $bank=$_REQUEST['bank'];
    $account=$_REQUEST['account'];
    $branch=$_REQUEST['branch'];
   if(empty($mail))
   {

   }
   else{
   mysqli_query($con,"INSERT into user (mail,remail,name,phone,street,city,dob,password,repass,bank,account,branch) VALUES('$mail','$remail','$name','$phone','$street','$city','$dob','$password','$repass','$bank','$account','$branch')");
   }
   /*  if(empty($mail))
   {

   }
   else{
    mysqli_query($con,"INSERT into user3 (Email *,Repeat email *,Password,Repeat password,Name,Phone,Street,City,Gender,dob) VALUES('$mail','$remail','$password',$repass,$name,$phone,$street,$city,$gender,$dob)");   
   }*/
}
?>





<html>
    <head>
        <title>CSS Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="styleup.css">
    </head>
    <body id="body-bg"> 
	<style>
#body-bg{
background:url("creditcards.jpg")  no-repeat fixed;
background-size:100% 100%;
}
</style>
        <form  action="" class="register" method='POST'>
            <h1 id="r">Registration</h1>    <style> #r { color:white;}</style>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label id="e">Email *   <style> #e { color:white;}</style>  
                    </label>
                    <input type="text" name="mail" required/>
                    <label id="re">Repeat email *  <style> #re { color:white;}</style>
                    </label>
                    <input type="text" name="remail" required>
                </p>
                <p>
                    <label id="p">Password*    <style> #p { color:white;}</style>
                    </label>
                    <input type="password" name="password"required/>
                    <label id=rp>Repeat Password*  <style> #rp { color:white;}</style>
                    </label>
                    <input type="password" name="repass" required />
                    <label class="obinfo">* obligatory fields
                    </label>
                </p>
                <p>
                    <label id="p">Account Number*    <style> #p { color:white;}</style>
                    </label>
                    <input type="text" name="account"required/>
                    <label id=rp>Bank*  <style> #rp { color:white;}</style>
                    </label>
                    <input type="text" name="bank" required />
                    
                    </label>
                </p>
               
                <p>
                    <label id="p">Branch*   <style> #p { color:white;}</style>
                    </label>
                    <input type="text" name="branch"required/>
                    <label id=rp>Card Selection*  <style> #rp { color:white;}</style>
                    </label>
                   <select>
                    <option value='1'>Premium
                    </option>               
                    <option value="2">Advanced</option>
                    </select>
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label id=n>Name *     
                    </label>
                    <input type="text" class="long" name="name" required/>
                </p>
                <p>
                    <label id=p>Phone *    <style> #p,n,c { color:white;}</style>
                    </label>
                    <input type="text" maxlength="10" name="phone" required/>
                </p>
                <p>
                    <label class="optional">Street
                    </label>
                    <input type="text" class="long" name="street" required/>
                </p>
                <p>
                    <label id="c">City *
                    </label>
                    <input type="text" class="long"name='city' required/>
                </p>
                <p>
                    <label id="c">Country *
                    </label>
                    <select>
                        <option value="0">India
                        </option>
                        <option value="1">United States
                        </option>
                    </select>
                </p>
                <p>
                    <label class="optional">Website
                    </label>
                    <input class="long" type="text" value="http://"/>

                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label id="g">Gender *</label>            <style> #g { color:white;}</style>
                    <input type="radio" value="radio" name="gender" required/>
                    <label  id ="m"class="gender">Male</label><style> #m { color:white;}</style>
                    <input type="radio" value="radio" name="gender" required/>
                    <label id="f" class="gender">Female</label> <style> #f { color:white;}</style>
                </p>
                <p>
                    <label id="b">Birthdate *
                       <style> #b{
                            color:white;
                       }</style>
                    </label>
                    
                        <input type='date' name='dob' placeholder="Enter D.O.B" required/>
                
                </p>
                <p>
                    <label id="n">Nationality *
                            <style> #n { color:white;}</style>
                    </label>
                    <select>
                        <option value="0" required>India
                        </option>
                        <option value="1"  required>United States
                        </option>
                    </select>
                </p>
                <p>
                    <label id="c">Children *                  <style> #c { color:white;}</style>
                    </label>
                    <input type="checkbox" value="" />
                </p>
                <div class="infobox"><h4>Helpful Information</h4> 
                    <p>Here comes some explaining text, ....</p>
                </div>
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive personalized offers by your site</label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>Allow partners to send me personalized offers and related services</label>
                </p>
            </fieldset>
            <div><button class="button" name="submit">Register &raquo;</button></div>
        </form>
    </body>
</html>





