<?php session_start(); ?>
<?php require_once('../inc/confrig.php'); ?>

<?php

$un='';
$ps='';

if(isset($_GET["sub"]))
	{		
		$un= $_GET['uname'];
        $ps= $_GET['psw'];
			
		$query2 ="SELECT * FROM `user` where `email`= '$un' and `password` = '$ps' ";
        $result2 = mysqli_query($connection, $query2);
        echo mysqli_num_rows($result2);
				if(mysqli_num_rows($result2) > 0)
				{
					
				
					$row2 = mysqli_fetch_array($result2);
					$username=$row2["email"];
					$password=$row2["password"];
					$userType=$row2["userType"];
					
					if($un==$username && $ps==$password)
					{
						$_SESSION['valid'] = true;
                  		$_SESSION['timeout'] = time();
						$_SESSION['email'] = $un;

						//update last login
					$query = "UPDATE `user` SET last_login = NOW() WHERE `email` = '{$_SESSION['email']}' LIMIT 1";
					
					$result_set = mysqli_query($connection,$query);

						if($userType==1){
							echo '<script>window.location.href = "../home.php";</script>';
						}else if($userType==2){
							echo '<script>window.location.href = "../../admin/voHome.php";</script>';
						}else{
							echo '<script>window.location.href = "../../admin/adminHome.php";</script>';
						}

					}
				}
				else
				{
                    echo '<script>alert("Incorrect Password or Username")</script>';
                    echo '<script>window.location.href = "../index.php";</script>';

				}
	}

?>