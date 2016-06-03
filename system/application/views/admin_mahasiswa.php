<div id="content">
	<div id="page-heading">
		<h1>Daftar Mahasiswa</h1>
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
					<th width="50px" class="table-header-repeat line-left"><a href="">ID</a>	</th>
					<th class="table-header-repeat line-left"><a href="">Nama Mahasiswa</a></th>
					<th class="table-header-repeat line-left"><a href="">NRP</a></th>
					<th class="table-header-repeat line-left"><a href="">Username</a></th>
					<th class="table-header-repeat line-left"><a href="">Password</a>	</th>
					<th width="100px" class="table-header-repeat line-left"><a href="">Action</a></th>
				</tr>
<?php
$i=1;
foreach ($mahasiswa as $list)
{?>
			<tr id="data<?php echo $list['id']?>" class="alternate-row">
            <td><?php echo $i?></td>
            <td><?php echo $list['id']?></td>
            <td><?php echo $list['nama']?></td>
            <td><?php echo $list['nrp']?></td>
			<td><?php echo $list['username']?></td>
            <td><?php echo $list['password']?></td>
            <td width="150px" class="options-width"><input type="button" value="Edit" href="admin/mahasiswa/edit_mahasiswa/<?php echo $list['id']?>" onclick="edit(<?php echo $list['id']?>)" />
                <a style="text-decoration:none;" href="admin/mahasiswa/hapus_mahasiswa/<?php echo $list['id']?>" onclick="return confirm('Apakah yakin ingin menghapus file ini?')"><input type="button" value="Hapus"  /></a>
            </td>
        </tr>
        <tr id="edit<?php echo $list['id']?>" style="background-color: #F65; display: none">
        <form id="form<?php echo $list['id']?>" action="xxx" method="POST">
            <td><?php echo $i?></td>
            <td><?php echo $list['id']?></td>
            <td><input type="text" id="nama<?php echo $list['id']?>" name="nama" value="<?php echo $list['nama']?>" /></td>
            <td><input type="text" id="nrp<?php echo $list['id']?>" name="nrp" value="<?php echo $list['nrp']?>" /></td>
			<td><input type="text" id="username<?php echo $list['id']?>" name="username" size="40" value="<?php echo $list['username']?>" /></td>
            <td><input type="text" id="password<?php echo $list['id']?>" name="password" size="40" value="<?php echo $list['password']?>" /></td>
            <td><input name="submit" type="button" value="Update" onclick="update(<?php echo $list['id'].",".$i++?>)" /> <input type="button" value="Batal" onclick="batal(<?php echo $list['id']?>)" /></td>
            </form>
        </tr>

        <?php }?>
        <tr style="background-color: #5DF;">
            <form action="admin/mahasiswa/insert_mahasiswa/" method="post" >
            <td>+</td>
            <td>+</td>
            <td><input type="text" name="nama" value="" /></td>
            <td><input type="text" name="nrp" value="" /></td>
			<td><input type="text" name="username" size="40" value="" /></td>
            <td><input type="text" name="password" value="" size="40" /></td>
            <td><input name="submit" type="submit" value="Tambah" /> <input name="submit" type="reset" value="Reset" /></td>
            </form>
        </tr>
				
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

<script type="text/javascript">
    function update(id, nomor)
    {
        var dataEdit = $('#form' + id).serialize();
        $.ajax({
                url: 'admin/mahasiswa/edit_mahasiswa/' + id,
                type: 'POST',
                data: dataEdit,
                success: function() {
                        $('#data'+id).load('admin/mahasiswa/load_mahasiswa/' + id + '/' + nomor);
                },
                error: function(){
                        alert("Terjadi kesalahan. Data tidak tersimpan.")
                }
        });
        batal(id);
    }
</script>

<script type="text/javascript">
    function Hapus(id, nomor)
    {
        var dataDelete = $('#form' + id).serialize();
        $.ajax({
                url: 'admin/mahasiswa/hapus_sidebar_menu/' + id,
                type: 'POST',
                data: dataDelete,
                success: function() {
                        $('#data'+id).load('admin/page/load_sidebar_menu/' + id + '/' + nomor);
                },
                error: function(){
                        alert("Terjadi kesalahan. Data tidak tersimpan.")
                }
        });
        batal(id);
    }
</script>