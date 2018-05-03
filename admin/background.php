<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Background Img</h2>
        <div class="block">   

            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){ 
                    $permited  = array('png');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = 'bg.'.$file_ext;
                    $uploaded_image = "upload/".$unique_image;
                    
                   
                         if(empty($file_name)){
                                echo "Please Select an Img";
                            } else{   

                        if($file_size >1048567) {
                         echo "<span class='error'>Image Size should be less then 1MB!
                         </span>";
                        } elseif (in_array($file_ext, $permited) === false) {
                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        }else{
                        move_uploaded_file($file_temp, $uploaded_image);
                         $sql = "UPDATE tbl_bg SET 
                             
                            bg_img = '$unique_image' 
                            WHERE id='1'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                            echo "<span class='success'> Background Image Updated Successfully!</span>";
                        }
                       } 
                    }
                 
             }
                ?>

                  

         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">  
                <tr>
                    <td>
                        <label>Upload Background Image</label>
                    </td>
                    <td>
                        <img src="upload/bg.png" height="50px" width="80px"/><br/>
                        <input name="image" type="file" />
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
        </div>
    </div>
</div>
<?php include"inc/ad_footer.php";?>
 <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->