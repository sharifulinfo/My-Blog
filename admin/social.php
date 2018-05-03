<?php include"inc/ad_header.php";?>
<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Update Social Media</h2>
        <div class="block">    
        <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $fb = $_POST['fb'];
                    $tw = $_POST['tw'];
                    $li = $_POST['li'];
                    $gp = $_POST['gp'];

                    $fb = mysqli_real_escape_string($db->link , $fb);
                    $tw = mysqli_real_escape_string($db->link , $tw);
                    $li = mysqli_real_escape_string($db->link , $li);
                    $gp = mysqli_real_escape_string($db->link , $gp);

                    
                    if(empty($fb) OR empty($tw) OR empty($li) OR empty($gp)){
                        echo "<span class='error'>Field Must not be Empty!</span>";
                        }else{
                            $sql = "UPDATE tbl_social SET
                            tw = '$tw',
                            fb = '$fb',
                            li = '$li',
                            gp = '$gp'
                            WHERE id='1'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                           # echo "<span class='success'>Social Updated Successfully!</span>";
                            echo "<script>alert('Social Updated Successfully.')</script>";
                        }

                       
                    }
                 } 
           
                ?>
            <?php

             $sql = "SELECT * FROM tbl_social";
            $social = $db->select($sql);
            if($social){
                while($row = $social->fetch_assoc()){
            ?>           
         <form action="" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <label>Facebook</label>
                    </td>
                    <td>
                        <input type="text" name="fb" value="<?php echo $row['fb'];?>" class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Twitter</label>
                    </td>
                    <td>
                        <input type="text" name="tw" value="<?php echo $row['tw'];?>" class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <label>LinkedIn</label>
                    </td>
                    <td>
                        <input type="text" name="li" value="<?php echo $row['li'];?>" class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <label>Google Plus</label>
                    </td>
                    <td>
                        <input type="text" name="gp" value="<?php echo $row['gp'];?>" class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
          <?php }} else{header("location: ../404.php");} ?>    
        </div>
    </div>
</div>
<?php include"inc/ad_footer.php";?>