<?php include 'header.php'; ?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Settings</h2>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#mysettings">Username</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="#password">Password</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content settings-tab">
    <div id="mysettings" class="container tab-pane active">
      <br><center><h3>Manage Account</h3></center><br>
      <form method="post" action="settings.php">
            <div class="form-group row none">
                <label class="col-sm-2 control-label">id:</label>
                <input type="text" name="id" title="subject" value="<?php echo $id?>" placeholder="Title..." class="form-control col-sm-10" required>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">Username:</label>
                <input type="text" name="username" title="username" value="<?php echo $user?>" placeholder="username..." class="form-control col-sm-10" required>
            </div>
            <input type="submit" value="Update" name="update_mSettings" class="btn btn-success">
    <br>
</form>
    </div>
    <div id="profile" class="container tab-pane">
      <br><center><h3>Change logo</h3></center><br>
     <div class="row">
    <div class="col-lg-4">
        <span class="pull-right">
          <?php 
          if ($logo == "") {?>
            <img src="<?php echo $Assets?>/logo/Pharmacy.jpg" height="200" width="200" class="rounded-circle pp">
         <?php }else{?>
            <img src="<?php echo $Assets?>/logo/<?php echo $logo?>" height="200" width="200" class="rounded-circle pp">
          <?php } ?>
      </span>
     </div>
     <div class="col-lg-8">
        <form align="center" action="<?= $controller?>" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
    <div class="form-group row" style="display: none;">
    <label class="col-sm-2 control-label">Id:</label>
    <input type="text" name="id" title="subject" value="<?php echo $id ?>" class="form-control col-sm-10" required>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 control-label">Choose picture:</label>
    <input type="file" name="file" title="file" placeholder="subject..." class="form-control col-sm-10" required>
    </div>
                <input type="submit" value="Update" name="update_mprofile" class="btn btn-primary">
</form>
     </div>
 </div>
</form>
    </div>
    <div id="password" class="container tab-pane fade">
      <br><center><h3>Change Password</h3></center><br>
      
     <div>
        <form align="center" action="settings.php" method="POST" class="form-horizontal" role="form" style="max-width: 500px;">
    <div class="form-group row none">
    <label class="col-sm-3 control-label">Id:</label>
    <input type="text" name="id" value="<?php echo $id ?>" class="form-control col-sm-9" required>
    </div>
    <div class="form-group row">
    <label class="col-sm-3 control-label">Current Password:</label>
    <input type="password" name="cpass" title="Current Password" placeholder="Current Password..." class="form-control col-sm-9" required>
    </div>
    <div class="form-group row">
    <label class="col-sm-3 control-label">New Password:</label>
    <input type="password" name="npass" title="New Password" placeholder="New Password..." class="form-control col-sm-9" required>
    </div>
    <div class="form-group row">
    <label class="col-sm-3 control-label">Confirm Password:</label>
    <input type="password" name="copass" title="Comfirm Password" placeholder="Confirm Password..." class="form-control col-sm-9" required>
    </div>
                <input type="submit" value="Update" name="update_mpassword" class="btn btn-success">
</form>
     </div>

      </div>
<?php include 'footer.php'; ?>