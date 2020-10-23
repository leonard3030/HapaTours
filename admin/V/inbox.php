<?php include 'header.php'; ?>
  <style type="text/css">
    .unread{
      background-color: #dfdede;
    }
    .text-head{
      color: dodgerblue;
    }
  </style>
      <!-- Page Content  -->
      <div id="content" class="pl-5">
        <table class="table table-hover" id="td">
        	<thead>
        		<tr>
        		<th>Mails</th>
        		</tr>
        	</thead>
          <?php 
                $query = mysqli_query($db,"SELECT * FROM mails order by ma_id desc");
                while ($row = mysqli_fetch_assoc($query)) {?>
                <tr>
            <td class="<?php if($row['status'] == 'unread'){echo 'unread';} ?>">
              <a href="viewmsg.php?i=<?=$row['ma_id']?>" class="row">
                <div class="col-md-11">
                  <b class="text-head"><?=$row['names']?></b><br>
                  <p class="text-success" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 140vh;"><?=$row['message']?></p>
                </div>
              </a>
            </td>
          </tr>
                <?php }
                 ?>
				</table>
      </div>
<?php include 'footer.php'; ?>