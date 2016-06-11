<?php
require './config.php';
$sql_v = "SELECT upload_vdo.vdo_name FROM upload_vdo WHERE upload_vdo.status = 1 ORDER BY RAND() LIMIT 1";
$q_v = mysqli_query($connect,$sql_v);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Vdo Play</title>
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
</head>
<body onload="document.myMovie.play()">

<video class="vdo_set" id="vdos" autoplay controls>
<?php foreach ($q_v as $q_vs) {
	$vdo_name = $q_vs["vdo_name"];
?>
<source src="vdo/<?= $vdo_name ?>" type="video/mp4">
<?php
	}
 ?>
</video>

<script type="text/javascript">
	document.getElementById('vdos').addEventListener('ended',function(e){
		document.location.replace("index.php");
	})

</script>

</body>
</html>
