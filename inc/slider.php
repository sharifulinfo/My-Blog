<div class="slidersection templete clear">
        <div id="slider">
        <?php
			$sql = "SELECT * FROM tbl_slider";
			$ShowSlider = $db->select($sql);
			if($ShowSlider){ 
				while($row = $ShowSlider->fetch_assoc()){
		?>
            <a href="#"><img src="admin/upload/slider/<?php echo $row['slide_img']?>" alt="<?php echo $row['title']?>" title="<?php echo $row['title']?>" /></a>
             

        <?php }}?>
        </div>
</div>        