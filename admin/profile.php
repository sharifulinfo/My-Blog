<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Profile</h2>
        <div class="block">   
          <?php
                $UserId = Session::get('userId');
                $userRole = Session::get('userRole');
            ?>   

            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $details = $_POST['details'];
                   

                    $name = mysqli_real_escape_string($db->link , $name);
                    $username = mysqli_real_escape_string($db->link , $username);
                    $email = mysqli_real_escape_string($db->link , $email);
                    $details = mysqli_real_escape_string($db->link , $details); 

                         $sql = "UPDATE tbl_user SET 
                            name = '$name',
                            username = '$username',
                            email = '$email', 
                            details = '$details'
                            WHERE id='$UserId' AND role = '$userRole'";
                        $UpdateProfile = $db->update($sql);
                        if($UpdateProfile){
                            echo "<span class='success'>Profile Updated Successfully!</span>";
                        }
                       } 
             
                ?>

                <?php 
                    $sql = "SELECT * FROM tbl_user WHERE id = '$UserId' AND role = '$userRole'";
                    $Results = $db->select($sql);
                    if($Results){
                        while($Result = $Results->fetch_assoc()){
                    
                ?>   

         <form action="" method="post">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $Result['name'];?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>User Name:</label>
                    </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $Result['username'];?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $Result['email'];?>" class="medium" />
                    </td>
                </tr> 
                 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Details:</label>
                    </td>
                    <td>
                        <textarea name="details" class="tinymce">
                            <?php echo $Result['details'];?>
                        </textarea>
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