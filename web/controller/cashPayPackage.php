<?php require_once('../inc/confrig.php'); ?>

<?php

if(isset($_GET["id"]))
{

    $submit_id=$_GET['id'];


			$sql="UPDATE `booked_package` SET `status`='CASH' WHERE id ='$submit_id'";
					if(mysqli_query($connection,$sql))
					{
                        echo '<script>alert("You have selected "CASH" method for pay this booking")</script>';
                        echo '<script>window.location.href = "../bookingPayment.php";</script>';
					}
						
											
}
?>