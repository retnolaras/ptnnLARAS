<div id="content">
	<div id="page-heading">
		<h1>Daftar Data Dosen</h1>
		
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
					<th width="50px" class="table-header-repeat line-left"><a href="">No</a>	</th>
					<th class="table-header-repeat line-left"><a href="">Nama Dosen</a></th>
					<th class="table-header-repeat line-left"><a href="">Divisi</a></th>
					<th class="table-header-repeat line-left"><a href="">Laboratory</a></th>
					<th class="table-header-repeat line-left"><a href="">Action</a></th>
				</tr>
<?php
$i=1;
foreach ($dosen as $list)
{?>
				<tr id="data<?php echo $list['id']?>" class="alternate-row">
					<td width="50px"><?php echo $i?></td>
					<td><?php echo $list['nama']?></td>
					<td><?php echo $list['divisi']?></td>
					<td><?php echo $list['Lab']?></td>
					<td width="140px">
					<a style="text-decoration:none;" href="admin/matkul_dosen/insert_matkul/<?php echo $list['id']?>"><input type="button" value="Tambah Mata Kuliah"  /> </a>
					

					</td>
				</tr>
<?php
$i++; }
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