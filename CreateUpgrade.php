<!DOCTYPE html>
<html>
<head>
	<title>Create Upgrade</title>
</head>
<body>

<?php 
$location = 'Shirts/';
$type = '*.*';
$Shirts = glob($location.$type);
$amount = count($Shirts);
 
$sortedArray = array();

 
krsort($sortedArray);

foreach ($sortedArray as &$filename) {

    echo '<img src="'.$filename.'" /></a>';

?>

<script>

var loop = <?php for ($i = 0; $i < $amount; $i++) {
    $sortedArray[date ('YmdHis', filemtime($Shirts[$i]))] = $Shirts[$i];
}; ?>


</script>


</body>
</html>