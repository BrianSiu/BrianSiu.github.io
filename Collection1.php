<!DOCTYPE>
<html>
<body>
<!-- Lothar, Mike. "SHOW ALL IMAGES IN FOLDER WITH PHP." SHOW ALL IMAGES IN FOLDER 
     WITH PHP. N.p., 1 Aug. 2013. Web. 4 Jan. 2015. <http://ml.pe/optimizing/ 
     2013/show-all-images-in-folder-with-php/>.  -->
 <?php
$location = 'Shirts/';
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


