<?php include "inc/header.php";?>	
<?php
    if(isset($_GET['pageId']) && $_GET['pageId'] != NULL){
        $pageId = $_GET['pageId'];
    }else{
        echo "<script>window.location = '404.php'</script>";
        # header("Location: catlist.php");
    }
?>
	<div class="contentsection contemplete clear">
	<?php
		$sql = "SELECT * FROM tbl_page WHERE id='$pageId'";
		$showpage = $db->select($sql);
		if($showpage){
			while($row = $showpage->fetch_assoc()){
	?>
		<div class="maincontent clear">
			<div class="about">
				<h2><?php echo $row['page_name'];?></h2>
				<?php echo $row['page_body'];?>
	</div>
</div>
	<?php }} else{header("location: 404.php");} ?>

<?php include"inc/sidebar.php";?>
<?php include"inc/footer.php";?>
