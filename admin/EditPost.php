<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Post</h2>
        <div class="block">   
          <?php
                if(isset($_GET['PostID']) && $_GET['PostID'] != NULL){
                    $PostID = $_GET['PostID'];
                }else{
                    echo "<script>window.location = 'postlist.php'</script>";
                    # header("Location: catlist.php");
                }
            ?>   

            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $title = $_POST['title'];
                    $cat = $_POST['cat'];
                    $body = $_POST['body'];
                    $tags = $_POST['tags'];
                    $author = $_POST['author'];
                    $meta_des = $_POST['meta_des'];
                    $userid = $_POST['userid'];

                    $title = mysqli_real_escape_string($db->link , $title);
                    $cat = mysqli_real_escape_string($db->link , $cat);
                    $body = mysqli_real_escape_string($db->link , $body);
                    $tags = mysqli_real_escape_string($db->link , $tags);
                    $author = mysqli_real_escape_string($db->link , $author);
                    $meta_des = mysqli_real_escape_string($db->link , $meta_des);
                    $userid = mysqli_real_escape_string($db->link , $userid);

                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = "upload/".$unique_image;
                    
                    if(empty($title) OR empty($cat) OR empty($body) OR empty($tags) OR empty($author)){
                        echo "<span class='error'>Field Must not be Empty!</span>";
                        }else{
                         if(empty($file_name)){
                            $sql = "UPDATE tbl_post SET
                            cat = '$cat',
                            title = '$title',
                            body = '$body', 
                            author = '$author',
                            tags = '$tags',
                            meta_des = '$meta_des',
                            userid = '$userid'
                            WHERE id='$PostID'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                            echo "<span class='success'>Post Updated Successfully!</span>";
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
                         $sql = "UPDATE tbl_post SET
                            cat = '$cat',
                            title = '$title',
                            body = '$body',
                            image = '$unique_image',
                            author = '$author',
                            tags = '$tags',
                            meta_des = '$meta_des',
                            userid = '$userid'
                            WHERE id='$PostID'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                            echo "<span class='success'>Post Updated Successfully!</span>";
                        }
                       } 
                    }
                 } 
             }
                ?>

                <?php 
                    $sql = "SELECT * FROM tbl_post WHERE id = '$PostID'";
                    $POSTedit = $db->select($sql);
                    if($POSTedit){
                        while($POSTedits = $POSTedit->fetch_assoc()){
                    
                ?>   

         <form action="" method="post" enctype="multipart/form-data">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $POSTedits['title'];?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="cat">
                            <option>Select a Category</option>
                            <?php
                                $sql = "SELECT * FROM tbl_category";
                                $ViewPost = $db->select($sql);
                                if($ViewPost){
                                    while($row = $ViewPost->fetch_assoc()){
                            ?>
                            <option 
                                <?php 
                                    if($POSTedits['cat']==$row['id']){?>
                                    Selected
                                   <?php }
                                ?>
                             value="<?php echo $row['id'];?>"><?php echo $row['cat_name'];?></option> 

                            <?php }} else{header("location: ../404.php");} ?>    
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="upload/<?php echo $POSTedits['image'];?>" height="50px" width="100px"/><br/>
                        <input name="image" type="file" />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea name="body" class="tinymce">
                            <?php echo $POSTedits['body'];?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text" name="tags" value="<?php echo $POSTedits['tags'];?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Meta Description</label>
                    </td>
                    <td>
                        <input type="text" name="meta_des" value="<?php echo $POSTedits['meta_des'];?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        <input type="text" name="author" value="<?php echo $POSTedits['author'];?>" class="medium" />
                        <input type="hidden" name="userid" value="<?php echo Session::get('userId');?>" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
            <?php } } else{header("location: 404.php");} ?>
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