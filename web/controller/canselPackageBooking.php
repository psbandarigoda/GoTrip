<?php require_once('../inc/confrig.php'); ?>

<?php

if(isset($_GET["id"]))
{

	$submit_id=$_GET['id'];
	
		$query1 = "SELECT * FROM `booked_package` WHERE `id`=$submit_id";
						$result1 = mysqli_query($connection, $query1);
						if (mysqli_num_rows($result1) > 0){
							$row1 = mysqli_fetch_array($result1);
							$packid = $row1["package"];
						}


			$sql="DELETE FROM `booked_package` WHERE id ='$submit_id'";
					if(mysqli_query($connection,$sql))
					{
						
						$query2 = "SELECT * FROM `package` WHERE `id`=$packid";
							$result2 = mysqli_query($connection, $query2);
							if (mysqli_num_rows($result2) > 0){
							$row = mysqli_fetch_array($result2);
							$avail = $row["pacAvailability"];
							}

						
							$availability = $avail + 1;	
					
							$query3="UPDATE `package` SET `pacAvailability`=$availability WHERE id ='$packid'";
							mysqli_query($connection, $query3);

                        echo '<script>alert("Booking Cansel successfully")</script>';
                        echo '<script>window.location.href = "../bookingPackagePayment.php";</script>';
					}
						
											
}
?>