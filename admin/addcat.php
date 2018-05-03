<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Category</h2>
       <div class="block copyblock"> 
       <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $cat_name = $_POST['cat_name'];
                $cat_name = mysqli_real_escape_string($db->link , $cat_name);
                if(empty($cat_name)){
                    echo "<span class='error'>Field Must not be Empty!</span>";
                    }else{
                    $sql = "INSERT INTO tbl_category (cat_name) VALUES ('$cat_name')";
                    $AddCat = $db->insert($sql);
                    if($AddCat){
                        echo "<span class='success'>Category Inserted Successfully!</span>";
                    }
                }
             } 
       ?>
         <form action="addcat.php" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" name="cat_name" placeholder="Enter Category Name..." class="medium" />
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