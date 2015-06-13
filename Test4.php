<html> 
<form action = "Test4.php" method="POST" enctype="multipart/form-data">
	<input type="file" name ="image">
	<input type ="submit" value="Upload">
</form>


<?php 
$down = "upload/";
$name = $_FILES['image']['name'];
$tmp = $_FILES["image"]["tmp_name"]; 
move_uploaded_file($tmp, "$down/$name");


?>
</html>