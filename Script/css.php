<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
<?php 
    $sql = "SELECT * FROM tbl_theme";
    $result = $db->select($sql);
    if($result){
        while($row = $result->fetch_assoc()){ 
     		if($row['theme'] == 'default'){
     			include"theme/default.php";
     		 }
     		 if($row['theme'] == 'green'){
     		 	include"theme/green.php";
     		 }
     		 if($row['theme'] == 'blue'){
     		 	include"theme/blue.php";
     		 }
    }}
?>