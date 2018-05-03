</div>

	<div class="footersection templete clear">
	  <div class="footermenu clear">
	  <?php
			$path = $_SERVER['SCRIPT_FILENAME'];
			$current = basename($path,'.php');
		?>
		<ul>
			<li><a href="index.php">Home</a></li>
			<?php
	            $sql = "SELECT * FROM tbl_page";
	            $ViewPage = $db->select($sql);
	            if($ViewPage){
	                while($row = $ViewPage->fetch_assoc()){
       		 ?>
			<li><a href="page.php?pageId=<?php echo $row['id']?>" ><?php echo $row['page_name'];?></a></li>
			<?php }} else{header("location: 404.php");} ?>
			<li><a href="contact.php">Contact</a></li> 
		</ul>
	  </div>
	 	<?php
	        $sql = "SELECT * FROM tbl_copyright";
	        $social = $db->select($sql);
	        if($social){
	        while($row = $social->fetch_assoc()){
	    ?>
	  <p>&copy; <?php echo $row['copy_text']; echo date(' Y');?></p>
	  <?php }} else{header("location: ../404.php");} ?>   
	</div>
	<div class="fixedicon clear">
	<?php
    	$sql = "SELECT * FROM tbl_social";
    	$social = $db->select($sql);
    	if($social){
        while($row = $social->fetch_assoc()){
	?>
		<a href="<?php echo $row['fb'];?>"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="<?php echo $row['tw'];?>"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="<?php echo $row['li'];?>"><img src="images/in.png" alt="LinkedIn"/></a>
		<a href="<?php echo $row['gp'];?>"><img src="images/gl.png" alt="GooglePlus"/></a>

	<?php }} else{header("location: ../404.php");} ?>   

	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>