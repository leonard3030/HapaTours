<?php include 'admin/includes/config.php'; ?>
<?php 
if (ISSET($_POST['submitmail'])) {
	$name = $_POST['names'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$sql = mysqli_query($db,"INSERT INTO mails VALUES(NULL,'$name','$phone','$email','$message',NULL,'unread')");
	if ($sql) {
		echo "<script>alert('Message sent successfully')</script>";
		echo "<script>window.location.href='booking.php'</script>";
	}else{
		echo "<script>alert('Message not sent please try again later')</script>";
		echo "<script>window.location.href='booking.php'</script>";
	}
}
if (ISSET($_POST['submitbook'])) {
	$site = $_POST['site'];
	$names = $_POST['names'];
	$phone = $_POST['phone'];
	$cin = $_POST['cin'];
	$cout = $_POST['cout'];
	$adult = $_POST['adult'];
	$youth = $_POST['youth'];
	$child = $_POST['child'];
	$sqle = mysqli_query($db,"INSERT INTO booking VALUES(NULL,'$names','$phone','$site','$cin','$cout','$adult','$youth','$child','yes')");
	if ($sqle) {
		echo "<script>alert('Site Booked successfully')</script>";
		echo "<script>window.location.href='booking.php'</script>";
	}else{
		echo "<script>alert('Booking not sent please try again later')</script>";
		echo "<script>window.location.href='booking.php'</script>";
	}
}
?>
