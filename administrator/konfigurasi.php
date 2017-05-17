<?php 
include 'view/KonfigurasiUI.php';

$brd = new BerandaUI();

$brd->tampilLengkap();

print_r(PDO::getAvailableDrivers());

 ?>