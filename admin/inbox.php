<?php include"inc/ad_header.php";?> 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <?php
				    if(isset($_GET['seenId']) && $_GET['seenId'] != NULL){
				        $seenId = $_GET['seenId'];
				        $sql = "UPDATE tbl_contact
				                SET 
				                status = '1'
				                WHERE id = '$seenId'";
				            $msgSeen = $db->update($sql);
				            if($msgSeen){
				                echo "<span class='success'>Message Goed to Seenbox Successfully!</span>";
				            }else{
				        echo "<script>window.location = 'inbox.php'</script>";
				        # header("Location: catlist.php");
				    }}
				?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Massage</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM tbl_contact WHERE status='0' ORDER BY id DESC";
							$msg = $db->select($sql);
							if($msg){
								$i=0;
								while($row = $msg->fetch_assoc()){
									$i++;
						?>

						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $row['firstname'];echo ' ';echo $row['lastname'];?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $fm->TextShort($row['messagebody'],30);?></td>
							<td><?php echo $fm->FormateDate($row['date']);?></td>
							<td>
								<a href="viewmsg.php?msgId=<?php echo $row['id'];?>">View</a> || 
								<a href="replymsg.php?msgId=<?php echo $row['id'];?>">Reply</a> ||
								<a onclick="return confirm('Are you sure to Seen')" href="?seenId=<?php echo $row['id'];?>">Seen</a> 
							</td>
						</tr>

						<?php }}?>
					</tbody>

				</table>
               </div>
            </div>
        </div>


        <div class="grid_10">
            <div class="box round first grid">
                <h2>Seen Box</h2>
                <?php
                	 if(isset($_GET['DElID']) && $_GET['DElID'] != NULL){
				        $DElID = $_GET['DElID'];
				        $sql = "DELETE FROM tbl_contact WHERE id = '$DElID'";
						$DelCat = $db->delete($sql);
						if($DelCat){
							echo "<span class='success'>Message Deleted Succussfully!</span>";
						}

				    }
                ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Massage</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM tbl_contact WHERE status='1' ORDER BY id DESC";
							$msg = $db->select($sql);
							if($msg){
								$i=0;
								while($row = $msg->fetch_assoc()){
									$i++;
						?>

						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $row['firstname'];echo ' ';echo $row['lastname'];?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $fm->TextShort($row['messagebody'],30);?></td>
							<td><?php echo $fm->FormateDate($row['date']);?></td>
							<td>
								<a href="viewmsg.php?msgId=<?php echo $row['id'];?>">View</a> ||
								<a onclick="return confirm('Are you sure to delete')" href="?DElID=<?php echo $row['id'];?>">Delete</a> 
							</td>
						</tr>

						<?php }}?>
					</tbody>

				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">

$(document).ready(function () {
    setupLeftMenu();

    $('.datatable').dataTable();
    setSidebarHeight();


});
</script>
<?php include"inc/ad_footer.php";?>
