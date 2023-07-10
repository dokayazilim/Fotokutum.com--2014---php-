<?php
$ad=$_POST["ad"];
if($ad!="") {
header("Location:uye.php");
}
else{
	
	echo "Ad tarafı boş geçilemez...";

	}
?>