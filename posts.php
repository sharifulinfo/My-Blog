<?php 
	include "inc/header.php";
	include "inc/slider.php";
?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
		<!--Pagination-->
			<?php
				$per_page = 3;
				if(isset($_GET['page'])){
					$page = $_GET['page'];
				}else{
					$page = 1;
				}
				$start_form = ($page-1)*$per_page;
			?>
		<!--Pagination-->

		<?php
			if(!isset($_GET['categoryId']) OR $_GET['categoryId']==NULL){
				header("location: 404.php");
			}else{
				$CatID = $_GET['categoryId'];
			}
		?>

			<?php 
				$sql = "SELECT * FROM tbl_post WHERE cat = '$CatID' AND publish = '1' LIMIT $start_form , $per_page";
				$ViewPost = $db->select($sql);
				if($ViewPost){
					while($row = $ViewPost->fetch_assoc()){
			?>	
			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h2>
				<h4><?php echo $fm->FormateDate($row['date']);?>, By <a href="#"><?php echo $row['author'];?></a></h4>
				 <a href="post.php?id=<?php echo $row['id'];?>"><img src="admin/upload/<?php echo $row['image'];?>" alt="post image"/></a>
					<?php echo $fm->TextShort($row['body']);?>
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $row['id'];?>">Read More</a>
				</div>
			</div>  
			<?php } ?>
			<!--Pagination-->
			<?php
			$sql = "SELECT * FROM tbl_post WHERE publish = '1'";
			$result = $db->select($sql);
			$total_rows = mysqli_num_rows($result);
			$total_pages = ceil($total_rows/$per_page);

			echo "<span class='Pagination'><a href='index.php?page=1'>".'First Page'."</a>";
			for($i=1; $i<=$total_pages; $i++){
				echo "<a href='index.php?page=".$i."'>".$i."</a>";
			}
			echo "<a href='index.php?page=$total_pages'>".'Last Page'."</a></span>";
			?>
			<!--Pagination-->
			<?php } else{echo "Nothing to Here...";} ?>

		</div>

<?php include"inc/sidebar.php";?>
<?php include"inc/footer.php";?>