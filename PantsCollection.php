<!DOCTYPE>
<html>
<body>
 <?php
$location = 'Pants/';
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
    max-width: 500px;
    padding: 50px;

}
body {
	background-color:#C3D7DF;
}
</style>


