<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
<?php
	if(isset($_GET['delID'])){
		$delID = $_GET['delID'];
		$sql = "DELETE FROM tbl_category WHERE id = '$delID'";
		$DelCat = $db->delete($sql);
		if($DelCat){
			echo "<span class='success'>Category Deleted Succussfully!</span>";
		}
	}
?>									
        <h2>Category List</h2>
        <div class="block">        
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Category Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

			<?php 
				$sql = "SELECT * FROM tbl_category ORDER BY id DESC";
				$AllCat = $db->select($sql);
				if($AllCat){
					$i=0;
					while($row = $AllCat->fetch_assoc()){
						$i++;
			?>
				<tr class="odd gradeX">
					<td><?php echo $i;?></td>
					<td><?php echo $row['cat_name'];?></td>
					<td><a href="categoryEdit.php?catEdit=<?php echo $row['id'];?>">Edit</a> || <a onclick="return confirm('Are you sure to Delete!')" href="?delID=<?php echo $row['id'];?>">Delete</a></td>
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
