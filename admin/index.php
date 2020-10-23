<?php include('includes/adminfunctions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>HapaTour | Admin</title>
	<link rel="stylesheet" type="text/css" href="Assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap-4.0.0/dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
	<div class="login-form-container">
	<form method="post" action="index.php" class="input-form">
		<?php echo display_error(); ?>
		<label>Username</label>
		<div class="input-group">
			<input type="text" class="form-control" name="username" value="<?php echo $username ?>" 
			style="background-image: url(images/username.png);"placeholder="Username" autocomplete="off">
		</div>
		<label>Password</label>
		<div class="input-group">
			<input type="password" class="form-control" value="<?php echo $password ?>"  name="password" style="background-image: url(images/password.png);"placeholder="Password" id="myInput">
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-primary" name="login_btn" class="form-control">Login</button>
		</div>
			<div class="checkbox" id="checkbox">
			<input type="checkbox" id="show" size="70" class="site-check" onclick="myFunction()"><b>&nbsp;&nbsp;Show password</b>
			<!--<a href="#forgot_password">Forgot password</b><i class="input-helper"></i>-->
			</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script></form>
		</div>
	</div>
</body>
<footer class="footer">
    <div class="clearfix">
        <b style="color: black;background-color: white;padding: 10px;border-radius: 2px;">Copyright &copy; 2020 - <?= date('Y') ?>
            <a href="#"> Hapa media </a>. All rights reserved.</b>
    </div>
</footer>

</html>