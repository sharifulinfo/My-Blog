<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
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
                         $sql = "INSERT INTO tbl_page (page_name,page_body) VALUES ('$page_name','$page_body')";
                        $AddPost = $db->insert($sql);
                        if($AddPost){
                            echo "<span class='success'>Page Created Successfully!</span>";
                        }
                    }
                 } 
                ?>


         <form action="" method="post">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Page Name:</label>
                    </td>
                    <td>
                        <input type="text" name="page_name" placeholder="Enter Page Name..." class="medium" />
                    </td>
                </tr> 

                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea name="page_body" class="tinymce"></textarea>
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