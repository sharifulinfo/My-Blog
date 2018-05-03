<?php 
		if(isset($_GET['pageId'])){
			$pageId = $_GET['pageId'];
	            $sql = "SELECT * FROM tbl_page WHERE id='$pageId'";
	            $ViewPage = $db->select($sql);
	            if($ViewPage){
	                while($row = $ViewPage->fetch_assoc()){
        ?>
        	<title><?php echo $row['page_name']?> - <?php echo TITLE;?></title>

        <?php }}?>
		<?php }elseif(isset($_GET['id'])){
			$postId = $_GET['id'];
			 $sql = "SELECT * FROM tbl_post WHERE id='$postId'";
	            $postids = $db->select($sql);
	            if($postids){
	                while($rows = $postids->fetch_assoc()){

		?>
			<title><?php echo $rows['title']?> - <?php echo TITLE;?></title>

		<?php }}}else{?>
			<title><?php echo $fm->title();?> - <?php echo TITLE;?></title>	
		<?php }?>
	<meta name="language" content="English">
	<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$sql = "SELECT * FROM tbl_post WHERE id='$id'";
			$result = $db->select($sql);
			if($result){
				while($row = $result->fetch_assoc()){?>
					<meta name="keywords" content="<?php echo $row['tags'];?>">
				<?php }}}else{?>
					<meta name="keywords" content="<?php echo METANAME;?>">	
				<?php }?>

		<?php
			if(isset($_GET['id'])){
			$id = $_GET['id'];
			$sql = "SELECT * FROM tbl_post WHERE id='$id'";
			$result = $db->select($sql);
			if($result){
				while($row = $result->fetch_assoc()){?>
					<meta name="description" content="<?php echo $row['meta_des'];?>">
				<?php }}}else{?>
					<meta name="description" content="<?php echo METADES;?>">	
				<?php }?>
				
		<?php
			if(isset($_GET['id'])){
			$id = $_GET['id'];
			$sql = "SELECT * FROM tbl_post WHERE id='$id'";
			$result = $db->select($sql);
			if($result){
				while($row = $result->fetch_assoc()){?>
					<meta name="author" content="<?php echo $row['author'];?>">
				<?php }}}else{?>
					<meta name="author" content="<?php echo AUTHOR;?>">	
				<?php }?>