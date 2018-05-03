<?php include"inc/ad_header.php";?>
<?php
    if(isset($_GET['DelPage']) && $_GET['DelPage'] != NULL){
        $DelPage = $_GET['DelPage'];

        $sql = "DELETE FROM tbl_page WHERE id = '$DelPage'";
        $DelPage13 = $db->delete($sql);
        if($DelPage13){
            #header("location: postlist.php");
            echo "<script>alert('Post Deleted Successfully.')</script>";
            echo "<script>window.location = 'index.php'</script>";

        }

    }else{
        echo "<script>window.location = 'index.php'</script>";
        # header("Location: catlist.php");
    }
?>