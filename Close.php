<html> 
<body> 
	<form action="Close.php" method="POST" enctype="multipart/form-data">
		<input type ="file" name="image"><input type="submit" name="submit" value="Upload">
	</form>
<?php

if(isset($_POST["submit"]))
{
	mysql_connect("localhost:", "root", "root");
	mysql_select_db("Outfitter");

	$imageName = mysql_real_escape_string($_FILES["image"]["name"]);
	$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType = mysql_real_escape_string($FILES["image"]["type"]);
	
	if(substr($imageType,0,5) == "image")
	{
		mysql_query("INSERT INTO 'pants' VALUES(' ','$imageName', '$imageData')")
		echo "Image up"
	}
	else 
	{
		echo "Only images are allowed"
	}


?>
</body> 
</html> 


