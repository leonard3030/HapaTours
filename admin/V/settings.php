<?php 
include '../includes/config.php';
if (isset($_POST['update_mSettings'])) {
	mSettings();
}

function mSettings(){
	global $db, $id;
	$id 		= $_POST['id'];
	$username 	= $_POST['username'];

	$sql = "UPDATE users SET  username = '$username' WHERE id = '$id'";
	$delete_query = mysqli_query($db,$sql);
	if ($delete_query) {
		echo "<script>alert('OPERATION DONE: Username updated successfully')</script>";
	    	echo "<script>window.location.href='set.php'</script>";
	}
}


if (isset($_POST['update_mpassword'])) {
	mpassword();
}


function mpassword(){
	global $db;
	$a = $_POST['id'];
	$b = $_POST['cpass'];
	$c = $_POST['npass'];
       $d = $_POST['copass'];
       $e = md5($b);
	$f = md5($c);
if ($c == $d) {?>
    <?php
    $sql = "SELECT * FROM users where password = '$e' AND id = '$a'";
    $result = $db->query($sql);

if ($result->num_rows > 0) {
    $test=mysqli_query($db,"UPDATE users SET password='$f' WHERE id='$a'");
    if ($test) {
        echo "<script>alert('Password Updated successfully');</script>";
// Code for redirection
             echo "<script>window.location.href='set.php'</script>"; 
         }  else{
             echo " Failed: ".mysqli_error($db);
             # code...
         }
     }else{
        echo "<script>alert('The current password is not correct');</script>";
// Code for redirection
             echo "<script>window.location.href='set.php'</script>"; 
     }

}else{
    echo "<script>alert('The two passwords do not match');</script>";
// Code for redirection
             echo "<script>window.location.href='set.php'</script>"; 
}
}
 ?>