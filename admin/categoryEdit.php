<?php include"inc/ad_header.php";?>
<?php
    if(isset($_GET['catEdit']) && $_GET['catEdit'] != NULL){
        $catId = $_GET['catEdit'];
    }else{
        echo "<script>window.location = 'catlist.php'</script>";
        # header("Location: catlist.php");
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Category</h2>
       <div class="block copyblock"> 
       <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $cat_name = $_POST['cat_name'];
                $cat_name = mysqli_real_escape_string($db->link , $cat_name);
                if(empty($cat_name)){
                    echo "<span class='error'>Field Must not be Empty!</span>";
                    }else{
                    $sql = "UPDATE tbl_category
                        SET 
                        cat_name = '$cat_name'
                        WHERE id = '$catId'";
                    $UpdatCate = $db->update($sql);
                    if($UpdatCate){
                        echo "<span class='success'>Category Updated Successfully!</span>";
                    }
                }
             } 
       ?>
        <?php 
            $sql = "SELECT * FROM tbl_category WHERE id = '$catId'";
            $EditCat = $db->select($sql)->fetch_assoc();
        ?>
         <form action="" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" name="cat_name" value="<?php echo $EditCat['cat_name'];?>" class="medium" />
                    </td>
                </tr>
				<tr> 
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include"inc/ad_footer.php";?>