<?php include 'header.php'; ?>
<?php 
$ma_id = $_GET['i'];
$sql = mysqli_query($db, "UPDATE mails SET status ='read' WHERE ma_id = '$ma_id'");
$query = mysqli_query($db,"SELECT * FROM mails WHERE ma_id = '$ma_id'");
                while ($row = mysqli_fetch_assoc($query)) {?>
  <style type="text/css">
    .unread{
      background-color: #dfdede;
    }
    .text-head{
      color: dodgerblue;
    }
  </style>
      <!-- Page Content  -->
      <div id="content" class="pl-2 " style="margin-left: 300px;">

                <div class="modal-dialog modal-xl" style="border: none !important;">
    <div class="modal-content" style="border: none !important;">

      <!-- Modal Header -->
      <div class="modal-header">
                      <div style="display: flex;">
                      <img src="../Assets/ue.png" class="img-rounded " style="background-color: grey;border-radius: 100%;height: 80px;">
                      <div style="line-height: 5px;">
                      <h4 class="text-head" style="margin-left: 10px;"><?=$row['names']?></h4>
                      <p class="text-head" style="margin-left: 10px;color: dimgrey"><?=$row['email']?></p>
                      <p class="text-head" style="margin-left: 10px;color: dimgrey"><?=$row['phone']?></p>
                      </div>
                      </div>
                      <p class="text-head" style="margin-left: 10px;color: dimgrey"><?=$row['date']?></p>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
                  <p class="text-dark"><?=$row['message']?></p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
      </div>

    </div>
  </div>
				</table>
      </div>
    <?php } ?>
<?php include 'footer.php'; ?>