<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Post</h2>
        <div class="block">   
          <?php
                if(isset($_GET['PostID']) && $_GET['PostID'] != NULL){
                    $PostID = $_GET['PostID'];
                }else{
                    echo "<script>window.location = 'catlist.php'</script>";
                    # header("Location: catlist.php");
                }
            ?>   

            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    echo "<script>window.location = 'postlist.php'</script>";
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
                        <input type="text"  readonly value="<?php echo $POSTedits['title'];?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td> 
                            <?php
                                $sql = "SELECT * FROM tbl_category";
                                $ViewPost = $db->select($sql);
                                if($ViewPost){
                                    while($row = $ViewPost->fetch_assoc()){
                            ?>
                            <?php 
                                    if($POSTedits['cat']==$row['id']){?>
                                     <input type="text"  readonly value="<?php echo $row['cat_name'];?>" class="medium" />
                                   <?php }
                                ?>
                            
                             <?php }}?>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="upload/<?php echo $POSTedits['image'];?>" height="150px" width="250px"/><br/> 
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
                        <input type="text" readonly value="<?php echo $POSTedits['tags'];?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Meta Description</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $POSTedits['meta_des'];?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $POSTedits['author'];?>" class="medium" /> 
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="OK" />
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