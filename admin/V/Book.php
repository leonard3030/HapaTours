<?php include 'header.php'; ?>        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">List of Bookings</h2>
        <table id="dt" class="table table-hover table-striped">
        	<thead>
                <tr>
                    <th>Client</th>
                    <th>Phone</th>
                    <th>Site</th>
                    <th>Check in</th>
                    <th>Check out</th>
                    <th>Adults(25+)</th>
                    <th>Youth(13-25)</th>
                    <th>Kids(12-)</th>
                    <th>Action</th>
                </tr>
        	</thead>
        	<tbody>
                <?php 
                $query = mysqli_query($db,"SELECT * FROM booking WHERE status='yes'");
                while ($row = mysqli_fetch_assoc($query)) {?>
                    <tr>
                    <td><?=$row['Names']?></td>
                    <td><?=$row['phone']?></td>
                    <td><?=$row['site']?></td>
                    <td><?=$row['cin']?></td>
                    <td><?=$row['cout']?></td>
                    <td><?=$row['adult']?></td>
                    <td><?=$row['youth']?></td>
                    <td><?=$row['kids']?></td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Cancel</a>
                    </td>
                </tr>
                <?php }
                 ?>
        	</tbody>
        </table>
      </div>
<?php include 'footer.php'; ?>