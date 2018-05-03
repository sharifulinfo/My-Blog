<?php include "inc/header.php";?>	 
<?php
	if(!isset($_GET['id']) OR $_GET['id']==NULL){
		header("location: 404.php");
	}else{
		$id = $_GET['id'];
	}
?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
			<?php 
				$sql = "SELECT * FROM tbl_post WHERE id = '$id' AND publish = '1'";
				$SinglePost = $db->select($sql);
				if($SinglePost){
					while($row = $SinglePost->fetch_assoc()){ 
			?>			

				<h2><?php echo $row['title'];?></h2>
				<h4><?php echo $fm->FormateDate($row['date']);?>, By <?php echo $row['author'];?></h4>
				 <img src="admin/upload/<?php echo $row['image'];?>" alt="post image"/>
				<?php echo $row['body'];?> 

				<div class="relatedpost clear">
					<h2>Related articles</h2>
				<?php
					$CateId = $row['cat'];
					$sql = "SELECT * FROM tbl_post WHERE cat = '$CateId' AND publish = '1' ORDER BY rand() LIMIT 6";
					$category = $db->select($sql);
					if($category){
					while($rows = $category->fetch_assoc()){ 
				?>
					<a href="post.php?id=<?php echo $rows['id'];?>"><img src="admin/upload/<?php echo $rows['image'];?>" alt="post image"/></a>
					
					<?php }}else{echo "No category is avialable here...";}?>
				</div>
			<?php
					}
				}else{
					header("location: 404.php");
				}
			?>	
	</div>
</div>
		
<?php include"inc/sidebar.php";?>
<?php include"inc/footer.php";?>
