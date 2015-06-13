<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
 <?php
$location = 'Outfit/';
$type = '*.*';
$Shirts = glob($location.$type);
$amount = count($Shirts);
 
$sortedArray = array();
for ($i = 0; $i < $amount; $i++) {
    $sortedArray[date ('YmdHis', filemtime($Shirts[$i]))] = $Shirts[$i];
}
 
krsort($sortedArray);

foreach ($sortedArray as &$filename) {

    echo '<img src="'.$filename.'" /></a>';
    
}


?>
</body>
</html>


<style>


img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 1000px;
    padding-bottom: 50px;
    padding-top: 50px;

  
}

body {
	background-color: #6991AC;
}
</style>















