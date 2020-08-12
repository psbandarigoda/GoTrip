<?php require_once('../inc/confrig.php'); ?>

<?php


if(isset($_GET["sub"]))
{

					$checkin=$_GET['checkin'];
					$adults=$_GET['adults'];
                    $children=$_GET['children'];
					$price=$_GET['pacprice'];
					$userid=$_GET['userid'];
					$packid=$_GET['pacid'];

					$adultsPrice = $price * $adults;
					$childPrice = ($price/2) * $children;
					$totPrice = $adultsPrice + $childPrice;
					
          
					if($checkin!="")
					{
						//echo 'return false';
					if($adults!="")
					{
						//echo 'return false';
					if($children!="")
					{	
						//echo 'return false';
					if($price!="")
					{
						//echo 'return false';
					


					$sql="INSERT INTO `booked_package`(`id`, `package`, `user`, `adults`, `children`, `startDate`, `price`, `status`) 
            				VALUES(0,'$packid','$userid','$adults','$children','$checkin','$totPrice', 'no paid')";
					if(mysqli_query($connection,$sql))
					{
						$query2 = "SELECT * FROM `package` WHERE `id`=$packid";
						$result2 = mysqli_query($connection, $query2);
						if (mysqli_num_rows($result2) > 0){
							$row = mysqli_fetch_array($result2);
							$avail = $row["pacAvailability"];
						}
						$availability = $avail - 1;	
					
						$query3="UPDATE `package` SET `pacAvailability`=$availability WHERE id ='$packid'";
						mysqli_query($connection, $query3);

						echo '<script>alert("Reagistation sucess.. You have to login the site")</script>';
                        echo '<script>window.location.href = "../bookingPackagePayment.php";</script>';
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