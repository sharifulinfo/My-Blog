<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
               <li><a class="menuitem">Site Option</a>
                    <ul class="submenu">
                        <li><a href="titleslogan.php">Title & Slogan</a></li>
                        <li><a href="social.php">Social Media</a></li>
                        <li><a href="copyright.php">Copyright</a></li>
                        <li><a href="background.php">Background Img</a></li>
                        
                    </ul>
                </li>
				
                 <li><a class="menuitem">Pages</a>
                    <ul class="submenu">
                        <li><a href="addPage.php">Add New Page</a></li>
                        <?php
                            $sql = "SELECT * FROM tbl_page";
                            $ViewPage = $db->select($sql);
                            if($ViewPage){
                                while($row = $ViewPage->fetch_assoc()){
                        ?>
                        <li><a href="pageEdit.php?pageId=<?php echo $row['id']?>" ><?php echo $row['page_name'];?></a></li>

                        <?php }} else{header("location: 404.php");} ?>
                    </ul>
                </li>
                <li><a class="menuitem">Category Option</a>
                    <ul class="submenu">
                        <li><a href="addcat.php">Add Category</a> </li>
                        <li><a href="catlist.php">Category List</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Slider Option</a>
                    <ul class="submenu">
                        <li><a href="addSlide.php">Add Slider</a> </li>
                        <li><a href="Slidelist.php">Slider List</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Post Option</a>
                    <ul class="submenu">
                        <li><a href="addpost.php">Add Post</a> </li>
                        <li><a href="postlist.php">Post List</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>