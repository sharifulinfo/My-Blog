	<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
					<?php
						$sql = "SELECT * FROM tbl_category";
						$CatGory = $db->select($sql);
						if($CatGory){
							while($row = $CatGory->fetch_assoc()){
						?>
						<li><a href="posts.php?categoryId=<?php echo $row['id'];?>"><?php echo $row['cat_name'];?></a></li>

						<?php }} else{ ?>
						<li><a href="#">No Category Found!</a></li>	
						<?php } ?>					
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>

				<?php
					$sql = "SELECT * FROM tbl_post WHERE publish = '1' ORDER BY id DESC LIMIT 5";
					$LatestPost = $db->select($sql);
					if($LatestPost){
						while($row = $LatestPost->fetch_assoc()){
				?>
					<div class="popular clear">
						<h3><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['title']?></a></h3>
						 <a href="post.php?id=<?php echo $row['id'];?>"><img src="admin/upload/<?php echo $row['image'];?>" alt="post image"/></a>
						<?php echo $fm->TextShort($row['body'],125);?>
					</div>

				<?php }} else{header("location: 404.php");} ?>	
			</div>
			
		</div>