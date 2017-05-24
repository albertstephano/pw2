<?php 

require_once 'View.php';
include 'model/Berita.php';
/**
* 
*/
class berandaUIdepan_view extends View
{
	
	public function tampilBerita()
	{
		include_once 'model/Berita.php';

		$brt=new Berita();
		$isi_berita=$brt->ambilBerita();

		include_once 'pages/kontentugas2_pages.php';
		$this->end();
	}
}



 ?>