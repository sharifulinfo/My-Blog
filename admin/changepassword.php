<?php include"inc/ad_header.php";?>
<div class="grid_10"> 
    <?php $userId = Session::get('userId');?>
    <div class="box round first grid">
        <h2>Change Password</h2>
        <div class="block">        
            <?php
                 if($_SERVER['REQUEST_METHOD']=='POST'){
                    $old_pass = $_POST['old_pass'];
                    $new_pass = $_POST['new_pass'];
                    $con_Pass = $_POST['con_Pass'];

                    $old_pass = mysqli_real_escape_string($db->link, $old_pass);
                    $new_pass = mysqli_real_escape_string($db->link, $new_pass);
                    $con_Pass = mysqli_real_escape_string($db->link, $con_Pass);

                    $old_pass = md5($old_pass);

                    if(empty($old_pass) OR empty($new_pass) OR empty($con_Pass)){
                        echo "Field Must not be Empty!";
                    }else{
                        $sql = "SELECT * FROM tbl_user WHERE id = '$userId'";
                        $result = $db->select($sql);
                        while($row = $result->fetch_assoc()){
                            $Password = $row['password']; 
                            break;
                        }
                        if($Password == $old_pass){
                            if($new_pass == $con_Pass){
                                $new_pass = md5($new_pass);
                                $sql = "UPDATE tbl_user SET 
                                    password = '$new_pass'
                                    WHERE id = '$userId'
                                ";
                                $resullt = $db->update($sql);
                                if($resullt){
                                    echo "Password Updated Successfully!";
                                }
                            }else{
                                echo "Sorry Your New Password Does Not Match!";
                            }
                        }else{
                            echo "Your Old Password Does Not Match!";
                        }
                    }
                }
            ?>       
         <form action="" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <label>Old Password:</label>
                    </td>
                    <td>
                        <input type="password" name="old_pass" placeholder="Enter Old Password..."  name="title" class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>New Password:</label>
                    </td>
                    <td>
                        <input type="password" name="new_pass" placeholder="Enter New Password..." name="slogan" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Confarm New Password:</label>
                    </td>
                    <td>
                        <input type="password" name="con_Pass" placeholder="Enter New Password..." name="slogan" class="medium" />
                    </td>
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
</div>
<?php include"inc/ad_footer.php";?>