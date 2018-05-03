<?php include"inc/ad_header.php";?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Published Post List</h2>
<?php
    if(isset($_GET['unPuID']) && $_GET['unPuID'] != NULL){
        $unPuID = $_GET['unPuID'];
        $sql = "UPDATE tbl_post
                SET 
                publish = '0'
                WHERE id = '$unPuID'";
            $msgSeen = $db->update($sql);
            if($msgSeen){
                echo "<span class='success'>Post Go to Unpublish Successfully!</span>";
            }else{
        echo "<script>window.location = 'postlist.php'</script>";
        # header("Location: catlist.php");
    }}
?>
<?php
    if(isset($_GET['PuID']) && $_GET['PuID'] != NULL){
        $PuID = $_GET['PuID'];
        $sql = "UPDATE tbl_post
                SET 
                publish = '1'
                WHERE id = '$PuID'";
            $msgSeen = $db->update($sql);
            if($msgSeen){
                echo "<span class='success'>Post Go to Publish Successfully!</span>";
            }else{
        echo "<script>window.location = 'postlist.php'</script>";
        # header("Location: catlist.php");
    }}
?>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">SL</th>
							<th width="15%">Title</th>
							<th width="25%">Desctiption</th>
							<th width="10%">Image</th>
							<th width="5%">Category</th>
							<th width="10%">Tags</th>
							<th width="10%">Author</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT tbl_post.*,tbl_category.cat_name FROM tbl_post INNER JOIN tbl_category ON tbl_post.cat = tbl_category.id WHERE tbl_post.publish = '1' ORDER BY tbl_post.id DESC";
							$ViewPost = $db->select($sql);
							if($ViewPost){
								$i=1;
								while($row = $ViewPost->fetch_assoc()){
						?>
						<tr class="odd gradeX">
							<td><?php echo $i++;?></td>
							<td><?php echo $row['title'];?></td> 
							<td><?php echo $fm->TextShort($row['body'],50);?></td> 
							<td><img src="upload/<?php echo $row['image'];?>" height="50px" width="80px"></td> 
							<td><?php echo $row['cat_name'];?></td> 
							<td><?php echo $row['tags'];?></td> 
							<td><?php echo $row['author'];?></td>  
							<td style="font-size: 11px;">
								<a href="ViewPost.php?PostID=<?php echo $row['id'];?>">View</a> 

								<?php if(Session::get('userId') == $row['userid'] || Session::get('userRole') == '0'){?>
									|| <a href="?unPuID=<?php echo $row['id'];?>">Unpublish</a>
									|| <a href="EditPost.php?PostID=<?php echo $row['id'];?>">Edit</a> || 
									<a onclick="return confirm('Are you sure to Delete!')" href="DelPost.php?DelID=<?php echo $row['id'];?>">Delete</a></td>
								<?php }?>	

						</tr> 
						<?php }}?>
					</tbody>
				</table>
	
               </div>
            </div>
            </div>
            <div class="grid_10">

            <div class="box round first grid">
                <h2>Unpublished Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">SL</th>
							<th width="15%">Title</th>
							<th width="25%">Desctiption</th>
							<th width="10%">Image</th>
							<th width="5%">Category</th>
							<th width="10%">Tags</th>
							<th width="10%">Author</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT tbl_post.*,tbl_category.cat_name FROM tbl_post INNER JOIN tbl_category ON tbl_post.cat = tbl_category.id WHERE tbl_post.publish = '0' ORDER BY tbl_post.id DESC";
							$ViewPost = $db->select($sql);
							if($ViewPost){
								$i=1;
								while($row = $ViewPost->fetch_assoc()){
						?>
						<tr class="odd gradeX">
							<td><?php echo $i++;?></td>
							<td><?php echo $row['title'];?></td> 
							<td><?php echo $fm->TextShort($row['body'],50);?></td> 
							<td><img src="upload/<?php echo $row['image'];?>" height="50px" width="80px"></td> 
							<td><?php echo $row['cat_name'];?></td> 
							<td><?php echo $row['tags'];?></td> 
							<td><?php echo $row['author'];?></td>  
							<td style="font-size: 12px;">
								<a href="ViewPost.php?PostID=<?php echo $row['id'];?>">View</a> 

								<?php if(Session::get('userId') == $row['userid'] || Session::get('userRole') == '0'){?>
									|| <a href="?PuID=<?php echo $row['id'];?>">Publish</a>
									|| <a href="EditPost.php?PostID=<?php echo $row['id'];?>">Edit</a> || 
									<a onclick="return confirm('Are you sure to Delete!')" href="DelPost.php?DelID=<?php echo $row['id'];?>">Delete</a></td>
								<?php }?>	

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
