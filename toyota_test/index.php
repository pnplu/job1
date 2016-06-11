<?php
require './config.php';

$sql_img = "SELECT upload_image.image_name FROM upload_image WHERE upload_image.status = 1";
$q_i = mysqli_query($connect,$sql_img);

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Testing</title>
  <link href='https://fonts.googleapis.com/css?family=Kanit&subset=latin,thai' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
</head>
<body>
<form action="video.php">

<section class="container">
<article class="box_center">
<h1>จำนวนคนเข้าชม</h1>
<h3>0</h3>
<input type="submit" class="btn_click" onclick="document.myMovie.play()">
</article>
</section>
<?php
foreach ($q_i as $q){
	$img_name = $q["image_name"];
	?>

<img class="img_set" src="image/<?= $img_name ?>" >

<?php
	}
?>
</form>
</body>
</html>
