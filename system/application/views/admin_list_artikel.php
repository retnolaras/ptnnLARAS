<div id="content">
	<div id="page-heading">
		<h1>Daftar Konten Artikel</h1>
		<p align="right" style="padding-right:20px;"><?php echo anchor('admin/artikel/tambah_artikel', 'Tambahkan artikel baru') ?> </p>
	</div>
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>

	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<div id="content-table-inner">
			<div id="table-content">
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th width="50px" class="table-header-repeat line-left"><a href="">ID</a>	</th>
					<th class="table-header-repeat line-left"><a href="">Judul Indonesia</a></th>
					<th class="table-header-repeat line-left"><a href="">Judul English</a></th>
					<th width="100px" align=center class="table-header-repeat line-left"><a href="">Kategori</a></th>
					<th class="table-header-options line-left"><a href="">Action</a></th>
				</tr>
<?php
foreach ($daftar_artikel as $artikel)
{?>
				<tr class="alternate-row">
					<td width="50px"><?php echo $artikel['id']?></td>
					<td><?php echo $artikel['judul_ind']?></td>
					<td><a href=""><?php echo $artikel['judul_eng']?></a></td>
					<td  width="100px" align=center><?php echo $artikel['kategori']?></td>
					<td class="options-width">
					<a href="admin/artikel/edit_artikel/<?php echo $artikel['id']?>" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="admin/artikel/hapus_artikel/<?php echo $artikel['id']?>" onclick="return confirm('Apakah yakin ingin menghapus file ini?')" title="Delete" class="icon-2 info-tooltip"></a>
					
					</td>
				</tr>
<?php
}
?>				
				
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>