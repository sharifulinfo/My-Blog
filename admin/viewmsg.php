<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
    <?php
                if(isset($_GET['msgId']) && $_GET['msgId'] != NULL){
                    $msgId = $_GET['msgId'];
                }else{
                    echo "<script>window.location = 'index.php'</script>";
                    # header("Location: catlist.php");
                }
            ?> 

        <h2>Add New Post</h2>
        <div class="block">    
            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                     echo "<script>window.location = 'inbox.php'</script>";
                 } 
                ?>

                <?php
                    $sql = "SELECT * FROM tbl_contact WHERE id='$msgId'";
                    $ViewMsg = $db->select($sql);
                    if($ViewMsg){
                        while($row = $ViewMsg->fetch_assoc()){
                ?>
         <form action="" method="post">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $row['firstname'].' '.$row['lastname'];?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $row['email'];?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Date:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $fm->FormateDate($row['date']);?>" class="medium" />
                    </td>
                </tr> 

                <tr>
                    <td>
                        <label>Message:</label>
                    </td>
                    <td>
                        <textarea class="tinymce">
                            <?php echo $row['messagebody'];?>
                        </textarea>
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