<?php include"inc/ad_header.php";?>
<?php
    if(isset($_GET['DelID']) && $_GET['DelID'] != NULL){
        $DelID = $_GET['DelID'];

        $sql = "SELECT * FROM tbl_post WHERE id = '$DelID'";
		$Unlink = $db->select($sql)->fetch_assoc();
		if($Unlink){
			$delink = $Unlink['image'];
			unlink('upload/'.$delink);
		}

		$sql = "DELETE FROM tbl_post WHERE id = '$DelID'";
		$DelPost = $db->delete($sql);
		if($DelPost){
			#header("location: postlist.php");
			echo "<script>alert('Post Deleted Successfully.')</script>";
			echo "<script>window.location = 'postlist.php'</script>";

		}

    }else{
        echo "<script>window.location = 'postlist.php'</script>";
        # header("Location: catlist.php");
    } 
?>	