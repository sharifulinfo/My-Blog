<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
    <?php
                if(isset($_GET['pageId']) && $_GET['pageId'] != NULL){
                    $pageId = $_GET['pageId'];
                }else{
                    echo "<script>window.location = 'catlist.php'</script>";
                    # header("Location: catlist.php");
                }
            ?> 

        <h2>Add New Post</h2>
        <div class="block">    
            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $page_name = $_POST['page_name'];
                    $page_body = $_POST['page_body'];

                    $page_name = mysqli_real_escape_string($db->link , $page_name);
                    $page_body = mysqli_real_escape_string($db->link , $page_body);
                   
                    if(empty($page_name) OR empty($page_body)){
                        echo "<span class='error'>Field Must not be Empty!</span>";
                        }else{
                         $sql = "UPDATE tbl_page SET
                         page_name = '$page_name',
                         page_body = '$page_body'
                         WHERE id='$pageId';
                         ";
                        $AddPost = $db->update($sql);
                        if($AddPost){
                            echo "<span class='success'>Page Updated Successfully!</span>";
                        }
                    }
                 } 
                ?>

                <?php
                    $sql = "SELECT * FROM tbl_page WHERE id='$pageId'";
                    $viewpage = $db->select($sql);
                    if($viewpage){
                        while($row = $viewpage->fetch_assoc()){
                ?>
         <form action="" method="post">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Page Name:</label>
                    </td>
                    <td>
                        <input type="text" name="page_name" value="<?php echo $row['page_name'];?>" class="medium" />
                    </td>
                </tr> 

                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea name="page_body" class="tinymce">
                            <?php echo $row['page_body'];?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                        <a onclick="return confirm('Are you sure to delet')" href="DelPage1.php?DelPage=<?php echo $row['id'];?>" style="
                            font-size: 20px;
                            font-weight: normal;
                            padding: 2px;
                            background: #ccc;
                        ">Delete</a>
                    </td>
                </tr>
            </table>
            </form>
            <?php }} else{header("location: 404.php");} ?>
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