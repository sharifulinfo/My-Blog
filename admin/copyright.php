<?php include"inc/ad_header.php";?>
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Copyright Text</h2>
        <div class="block copyblock"> 
         <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $copyright = $_POST['copyright'];

                    $copyright = mysqli_real_escape_string($db->link , $copyright);

                    
                    if(empty($copyright)){
                        echo "<span class='error'>Field Must not be Empty!</span>";
                        }else{
                            $sql = "UPDATE tbl_copyright SET
                            copy_text = '$copyright'
                            WHERE id='1'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                           # echo "<span class='success'>Social Updated Successfully!</span>";
                            echo "<script>alert('Copyright Updated Successfully.')</script>";
                        }

                       
                    }
                 } 
           
                ?>
         <form action="" method="post">
             <?php
                    $sql = "SELECT * FROM tbl_copyright";
                    $social = $db->select($sql);
                    if($social){
                    while($row = $social->fetch_assoc()){
                ?>
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" value="<?php echo $row['copy_text'];?>" name="copyright" class="large" />
                    </td>
                </tr>
				
				 <tr> 
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
             <?php }} else{header("location: ../404.php");} ?> 
            </form>
        </div>
    </div>
</div>
<?php include"inc/ad_footer.php";?>