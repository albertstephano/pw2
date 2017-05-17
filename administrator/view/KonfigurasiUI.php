<?php 

require_once 'View.php';
/**
* 
*/
class BerandaUI extends View
{
	
	public function tampilLengkap()
	{
		$nama = "Albert";
		include_once 'pages/konfigurasi.php';
		$this->end();
	}
}



 ?>