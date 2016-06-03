<div id="content">
	<div id="page-heading">
		<h1>Daftar Konten</h1>
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
					<th width="100px" align=center class="table-header-repeat line-left"><a href="">Dari</a></th>
					<th width="200px" align=center class="table-header-repeat line-left"><a href="">Email</a></th>
					<th class="table-header-repeat line-left"><a href="">Comment</a></th>
					<th class="table-header-options line-left"><a href="">Action</a></th>
				</tr>
<?php
foreach ($forum as $list)
{?>
				<tr class="alternate-row">
					<td><?php echo $list['nama']?></td>
					<td><a href=""><?php echo $list['email']?></a></td>
					<td><?php echo $list['komentar']?></td>
					<td class="options-width">
					<a href="admin/comment/hapus/<?php echo $list['nama']?>" onclick="return confirm('Apakah yakin ingin menghapus file ini?')" title="Delete" class="icon-2 info-tooltip"></a>
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