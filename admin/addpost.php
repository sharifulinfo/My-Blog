<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Post</h2>
        <div class="block">    
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
                    
                    if(empty($title) OR empty($cat) OR empty($body) OR empty($tags) OR empty($author) OR empty($file_name)){
                        echo "<span class='error'>Field Must not be Empty!</span>";
                        }elseif ($file_size >1048567) {
                         echo "<span class='error'>Image Size should be less then 1MB!
                         </span>";
                        } elseif (in_array($file_ext, $permited) === false) {
                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        }else{
                        move_uploaded_file($file_temp, $uploaded_image);
                         $sql = "INSERT INTO tbl_post (cat,title,body,image,author,tags,meta_des,userid) VALUES ('$cat','$title','$body','$unique_image','$author','$tags','$meta_des','$userid')";
                        $AddPost = $db->insert($sql);
                        if($AddPost){
                            echo "<span class='success'>Post Inserted Successfully!</span>";
                        }
                    }
                 } 
                ?>


         <form action="" method="post" enctype="multipart/form-data">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
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
                            <option value="<?php echo $row['id'];?>"><?php echo $row['cat_name'];?></option> 

                            <?php }} else{header("location: ../404.php");} ?>    
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input name="image" type="file" />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea name="body" class="tinymce"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text" name="tags" placeholder="Enter Post Tags.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Meta Description</label>
                    </td>
                    <td>
                        <input type="text" name="meta_des" placeholder="Enter Meta Description.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        <input type="text" name="author" value="<?php echo Session::get('username');?>" class="medium" />
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