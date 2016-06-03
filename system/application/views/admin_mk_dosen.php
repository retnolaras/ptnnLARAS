
<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>

<!-- /TinyMCE -->

<div id="content">

<div id="page-heading"><h1>Tambah Mata kuliah Dosen</h1></div>

<form method="post" action="admin/matkul_dosen/insert" enctype="multipart/form-data">
    <input type="hidden" name="idnya" />

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
	<!--  start content-table-inner -->
	<div id="content-table-inner">

	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>

		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		Nama Dosen  : <?php foreach($dosen as $row){?><?php echo $row['nama']; ?> <br><br><br>
                Mata Kuliah Yang diajar : <br><br>
                <?php foreach($matkul as $mk){?>
                <ul style="margin-left: 15px; margin-bottom: 5px;"><li><?php echo $mk['nama_makul'];?>&nbsp;(<?php echo $mk['kode_matkul'];?>)</li></ul>
                <?php } ?>
                <br><br>
                Tambah Mata kuliah :<br><br>
                <ol style="margin-left: 18px; margin-bottom: 5px;">
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN200"  /> Dasar Dasar Proteksi Tanaman (PTN200)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN201"  /> Pengantar Agroekologi (PTN201)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN211"  /> Entomologi Umum (PTN211)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN212"  /> Ilmu Hama Tumbuhan Dasar (PTN212)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN213"  /> Vertebrata Hama (PTN213)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN221"  /> Biologi Patogen Tumbuhan (PTN221)  </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN222"  /> Ilmu Penyakit Tumbuhan Dasar (PTN222)  </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN301"  /> Hama dan Penyakit Benih dan Pascapanen (PTN301)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN302"  /> Hama dan Penyakit Tanaman Setahun (PTN302)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN303"  /> Hama dan Penyakit Tanaman Tahunan (PTN303)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN304"  /> Pemanfaatan dan Pengelolaan Pestisida (PTN304)  </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN305"  /> Pengendalian Hayati dan Pengelolaan Habitat (PTN305)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN398"  /> Teknik Penyajian Ilmiah (PTN398)   </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN401"  /> Pengendalian Terpadu Hama dan Penyakit Tanaman (PTN401)  </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN402"  /> Klinik Tanaman (PTN402)  </li>
                <li><input type="hidden" name="dosen" value="<?php echo $row['id']; ?>" /> <input type="checkbox" name="kode_matkul[]" value="PTN403"  /> Pengantar Bioteknologi dalam Proteksi Tanaman (PTN403)  </li>

                <?php } ?>
                
                </ol>

		<br><br><br><br>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" name="submit" value="Submit" class="form-submit"/>
		</td>
               

	</tr>

	</table>

	<!-- end id-form  -->

	</td>
	<td></td>
	</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
</div>
</td>
</tr>
	<div class="clear">&nbsp;</div>
</table>
</form>
</div>