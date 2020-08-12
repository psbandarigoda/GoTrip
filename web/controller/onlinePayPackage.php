<?php require_once('../inc/confrig.php'); ?>

<?php

if(isset($_GET["id"]))
{

    $submit_id=$_GET['id'];


			$sql="UPDATE `booked_package` SET `status`='payed' WHERE id ='$submit_id'";
					if(mysqli_query($connection,$sql))
					{
                        echo '<script>alert("Payment successfull")</script>';
                        echo '<script>window.location.href = "../bookingPayment.php";</script>';
					}
						
											
}
?>