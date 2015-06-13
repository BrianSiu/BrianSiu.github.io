<html> 
<head> 
	<title>Upload as image</title> 
</head> 
<body> 
	
<form action ="Test4.php" method="POST" enctype="multipart/form-data"> 
		<input type ="file" name="image">   
		<input type="submit" value="Upload">
	</form> 

<?php 
// $filename = $_FILES['image']["tmp_name"];
/* $imgData = file_get_contents($filename);
$size = getimagesize($filename);
mysql_connect("localhost", "root", "root");
mysql_select_db("Outfitter")

if(isset($_POST["submit"])) {
	$sql = "INSERT INTO 'pants' (image_id , image_type, image, image_size, image_name)
	VALUES 
	('', '{$size['mime']}, '{$imgData', '{$size[3]}', '{$_FILES['userfile']['name']}')";

mysql_query($sql);
}
else {
	echo "Give images";
} */ 
?> 

</body>
</html>