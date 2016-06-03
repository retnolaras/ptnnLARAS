<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/folder_32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Gallery</a></h2>
 <br />

 <?php
if (isset($daftargambar)){
	foreach($daftargambar->result() as $row){
	echo "<div class=\"item\"><a href=\"".base_url()."images/".$row->gambar."\">
		<img src=\"".base_url()."images/".$row->gambar."\" height=\"75\" width=\"100\" title=\"".$row->isi."\"></a>
		<div class=\"caption\">".$row->judul."</div>
		</div>";
	}
}
?>	