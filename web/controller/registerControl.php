<?php require_once('../inc/confrig.php'); ?>

<?php

$fname='';
$lname='';
$licen='';
$email='';
$tp='';
$pass='';

if(isset($_GET["sub"]))
{

					$userType=$_GET['usert'];
					$fname=$_GET['fname'];
                    $lname=$_GET['lname'];
					$email=$_GET['email'];
					$address=$_GET['address'];
					$phone=$_GET['phone'];
					$pass=$_GET['psw'];
          
					if($userType!="")
					{
						//echo 'return false';
					if($fname!="")
					{
						//echo 'return false';
					if($lname!="")
					{	
						//echo 'return false';
					if($email!="")
					{
						//echo 'return false';
					if($address!="")
					{
						//echo 'return false';
					if($phone!="")
					{
						//echo 'return false';
					if($pass!="")
					{


					$sql2="INSERT INTO `user`(`id`, `userType`, `fName`, `lName`, `email`, `address`, `phone`, `password`, `last_login`) 
            				VALUES(0,'$userType','$fname','$lname','$email','$address','$phone','$pass',0)";
					if(mysqli_query($connection,$sql2))
					{
						echo '<script>alert("Reagistation sucess.. You have to login the site")</script>';
                        echo '<script>window.location.href = "../index.php";</script>';
					}
						
						}
						else
						{
							echo '<script>alert(" Password must be filled")</script>';
							}
						
						}
						else
						{
							echo '<script>alert(" Mobile Number must be filled")</script>';
							}
						
						}
						else
						{
							echo '<script>alert(" Address must be filled")</script>';
							}
						
						}
						else
						{
							echo '<script>alert(" Email must be filled")</script>';
							}
						
						}
						else
						{
							echo '<script>alert(" Last Name must be filled")</script>';
							}
						
						}
						else
						{
							echo '<script>alert(" First Name must be filled")</script>';
							}
						
						}
						else
						{
							echo '<script>alert(" User Type must be filled")</script>';
							}
						
											
}
?>