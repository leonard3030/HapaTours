<?php include '../includes/adminfunctions.php'; ?>
<?php 
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
    echo "<script>alert('You must log in first')</script>";
    echo "<script>window.location.href='../'</script>";
	// header('location: ../');
}
$id = $_SESSION['user']['id'];
$sqll = mysqli_query($db,"SELECT * FROM users WHERE id = '$id'");
while ($row = mysqli_fetch_assoc($sqll)) {
	$user = $row['username'];
}

// $logo = $_SESSION['user']['phar_pf'];
$Assets = "../Assets";
 ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>HapaTour | Admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Assets/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="css/style.css">
		<style type="text/css">
			#content{
				margin-left: 250px;
			}
		</style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" style="z-index: 999; height: 100vh;position: fixed;">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="inbox.php" class="logo">HapaTour <span>Hapa Media Agency</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	         <!--  <li class="active">
              <a href="index.php"><span class="fa fa-briefcase mr-3"></span> Report</a>
	          </li>
	          <li>
	              <a href="book.php"><span class="fa fa-user mr-3"></span> Bookings</a>
	          </li> -->
	          <li><small class="d-flex align-items-center justify-content-center bg-danger rounded-circle" style="position: absolute;padding: 1px; max-height: 25px;font-size: 10px;margin-left: 60px;margin-top: 15px;min-width: 20px;font-family: arial">

               	<?php 
               	if (mysqli_num_rows($db->query("SELECT * FROM mails WHERE status = 'unread'")) > 20) {
               	 	echo "20+";
               	 }else{
               	 	echo mysqli_num_rows($db->query("SELECT * FROM mails WHERE status = 'unread'"));
               	 }
               	?>

               </span></small>
              <a href="inbox.php"><span class="fa fa-briefcase mr-3"></span>
               Mails</a>
	          </li>
	          <li>
              <a href="set.php"><span class="fa fa-sticky-note mr-3"></span> Settings</a>
	          </li>
	          <li>
              <a href="?logout=1"><span class="fa fa-sticky-note mr-3"></span> Logout</a>
	          </li>
	        </ul><!-- 

	        <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div> -->

	        

	      </div>
    	</nav>
