<div id="content">

<div id="page-heading"><h1>Edit Database</h1></div>
<p align="right" style="padding-right:20px;"><a href="admin/alumni">Kembali ke List Alumni</a> </p>
<br />
<?php 
foreach($alumni as $list)
{
?>
<form method="post" action="admin/alumni/edit_alumni/<?php echo $list['id']?>">
    <input type="hidden" value="pos" name="proses" />
    <input type="hidden" name="id" value="<?php echo $list['id']?>" />

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
		<tr>
			<th valign="top">Nama </th>
			<td><input type="text" size="60" name="nama" value="<?php echo $list['nama']?>" /></td>
		</tr>
		<tr>
			<th valign="top">NRP</th>
			<td><input type="text" size="20" name="nrp" value="<?php echo $list['nrp']?>" /></td>
		</tr>
		<tr>
			<th valign="top">Angkatan </th>
			<td><input type="text" size="5" name="angkatan" value="<?php echo $list['angkatan']?>" /></td>
		</tr>
		<tr>
			<th valign="top">Tahun Lulus </th>
			<td><input  id="tanggal"  type="text" size="20" name="thn_lulus" value="<?php echo $list['thn_lulus']?>" /></td>
		</tr>
		<tr>
			<th valign="top">Email</th>
			<td><input type="text" name="email" size="60" value="<?php echo $list['email']?>"/></td>
		</tr>

	<tr>
		<th valign="top">&nbsp;</th>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" name="submit" value="Submit" class="form-submit"/>
		</td>

	</tr>

	</table>
	<!-- end id-form  -->
	
	<?php } ?>
	</td>
	<td>
        </td>
        </tr>
        <tr>
        <td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
        <td></td>
        </tr>
       </table>
        </div>
        </tr>
</table>
</form>
	<div class="clear">&nbsp;</div>

</div>