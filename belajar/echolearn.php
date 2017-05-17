<?php
$nama="Albert Stephano";
echo "<h1>saya " .$nama." dari Pontianak</h1>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Judul Halaman</title>
</head>
<body>
<?php 
	for ($i=0; $i < 5 ; $i++) { ?>
	 	<h1><?php echo $nama ?></h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore asperiores earum ullam sapiente, repellendus obcaecati, eaque omnis dolorum repudiandae culpa aspernatur. Porro natus dolorem unde quas odit itaque asperiores debitis?</p>
<?php } ?>


	<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
	</tr>
<?php for ($i=0; $i < 10 ; $i++) { ?>
	<tr>
		<td><?php echo $i+1 ?></td>
		<td><?= $nama ?></td>
	</tr>
<?php } ?>
</table>

	
</body>
</html>