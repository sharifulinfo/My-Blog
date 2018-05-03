<?php 
	include "helpers/Formate.php";
	include "config/config.php";
	include "lib/Database.php";
?>	
<?php
	$db = new Database();
	$fm = new Formate();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "Script/meta.php";?>
	<?php include "Script/css.php";?>
	<?php include "Script/script.php";?>
</head>

<body>
	<div class="headersection templete clear">
		<a href="index.php">
			<div class="logo">
			<?php
				$sql = "SELECT * FROM tbl_logo";
				$logo = $db->select($sql)->fetch_assoc();
				if($logo){
			?>
				<img src="admin/upload/<?php echo $logo['logo'];?>" alt="Logo"/>
				<h2><?php echo $logo['title'];?></h2>
				<p><?php echo $logo['slogan'];?></p>
				<?php } ?>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
			 <?php
	            	$sql = "SELECT * FROM tbl_social";
	            	$social = $db->select($sql);
	            	if($social){
	                while($row = $social->fetch_assoc()){
            	?>
				<a href="<?php echo $row['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $row['tw'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $row['li'];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="<?php echo $row['gp'];?>" target="_blank"><i class="fa fa-google-plus"></i></a>
			<?php }} else{header("location: ../404.php");} ?>   
				
			</div>
			<div class="searchbtn clear">
			<form action="search.php" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit1" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
		<?php
			$path = $_SERVER['SCRIPT_FILENAME'];
			$current = basename($path,'.php');
		?>
	<ul>
		<li><a <?php if($current == 'index'){echo "id='active'";}?> href="index.php">Home</a></li>
		<?php
            $sql = "SELECT * FROM tbl_page";
            $ViewPage = $db->select($sql);
            if($ViewPage){
                while($row = $ViewPage->fetch_assoc()){
        ?>
         <li><a 
         <?php 
         	if(isset($_GET['pageId']) && $row['id']==$_GET['pageId']){
         		echo "id='active'";
         	}
         ?>
         href="page.php?pageId=<?php echo $row['id']?>" ><?php echo $row['page_name'];?></a></li>
		<?php }} else{header("location: 404.php");} ?>
		<li><a <?php if($current == 'contact'){echo "id='active'";}?> href="contact.php">Contact</a></li>
	</ul>
</div>

