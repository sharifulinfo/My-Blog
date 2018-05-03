<?php include"inc/ad_header.php";?>
<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Update Site Title and Description</h2>
         <div style="width: 70%; float: left;">
            <div class="block sloginblock">  
        <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $title = $_POST['title'];
                    $slogan = $_POST['slogan'];

                    $title = mysqli_real_escape_string($db->link , $title);
                    $slogan = mysqli_real_escape_string($db->link , $slogan);

                    $permited  = array('png');
                    $file_name = $_FILES['logo']['name'];
                    $file_size = $_FILES['logo']['size'];
                    $file_temp = $_FILES['logo']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $same_img = 'logo'.'.'.$file_ext;
                    $uploaded_image = "upload/".$same_img;
                    
                    if(empty($title) OR empty($slogan)){
                        echo "<span class='error'>Field Must not be Empty!</span>";
                        }else{
                         if(empty($file_name)){
                            $sql = "UPDATE tbl_logo SET
                            slogan = '$slogan',
                            title = '$title'
                            WHERE id='1'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                            echo "<span class='success'>Data Updated Successfully!</span>";
                        }

                         } else{   

                        if($file_size >1048567) {
                         echo "<span class='error'>Image Size should be less then 1MB!
                         </span>";
                        } elseif (in_array($file_ext, $permited) === false) {
                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        }else{
                        move_uploaded_file($file_temp, $uploaded_image);
                         $sql = "UPDATE tbl_logo SET
                            slogan = '$slogan',
                            title = '$title',
                            logo = '$same_img'
                            WHERE id='1'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                            echo "<span class='success'>Data Updated Successfully!</span>";
                        }
                       } 
                    }
                 } 
             }
                ?>
            <?php

             $sql = "SELECT * FROM tbl_logo";
            $slogan = $db->select($sql);
            if($slogan){
                while($row = $slogan->fetch_assoc()){
            ?>             
            <form action="" method="post" enctype="multipart/form-data">

                <table class="form">					
                    <tr>
                        <td>
                            <label>Website Title</label>
                        </td>
                        <td>
                            <input type="text" value="<?php echo $row['title']?>"  name="title" class="medium" />
                        </td>
                    </tr>
    				 <tr>
                        <td>
                            <label>Website Slogan</label>
                        </td>
                        <td>
                            <input type="text" value="<?php echo $row['slogan']?>" name="slogan" class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>Website Logo</td>
                        <td><input type="file" name="logo" class="medium"></td>
                    </tr>
    				 
    				
    				 <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" name="submit" Value="Update" />
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
        <div style="width: 25%;float: right">
            <img src="upload/<?php echo $row['logo'];?>" style="padding: 10px;border: 1px solid #ccc; width: 178px; height: 142px;margin-top: 10px;">
        </div>
<?php }} else{header("location: ../404.php");} ?>  
    </div>
</div>
<?php include"inc/ad_footer.php";?>
