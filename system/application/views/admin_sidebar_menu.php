<div id="content">
	<div id="page-heading">
		<h1>Daftar Sidebar Menu</h1>
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
					<th class="table-header-repeat line-left"><a href="">Nama Indonesia</a></th>
					<th class="table-header-repeat line-left"><a href="">Nama English</a></th>
					<th class="table-header-repeat line-left"><a href="">Link</a></th>
					<th width="50px" class="table-header-repeat line-left"><a href="">Parent</a>	</th>
					<th width="100px" class="table-header-repeat line-left"><a href="">Action</a></th>
				</tr>
<?php
$i=1;
foreach ($sidebar_menu as $menu)
{?>
			<tr id="data<?php echo $menu['id']?>" class="alternate-row">
            <td><?php echo $i?></td>
            <td><?php echo $menu['id']?></td>
            <td><?php echo $menu['indonesia']?></td>
            <td><?php echo $menu['english']?></td>
			<td><?php echo $menu['link']?></td>
            <td><?php echo $menu['parent']?></td>
            <td width="150px" class="options-width"><input type="button" value="Edit" onclick="edit(<?php echo $menu['id']?>)" />
                <a style="text-decoration:none;" href="admin/page/hapus_sidebar_menu/<?php echo $menu['id']?>" onclick="return confirm('Apakah yakin ingin menghapus file ini?')"><input type="button" value="Hapus"  /></a>
            </td>
        </tr>
        <tr id="edit<?php echo $menu['id']?>" style="background-color: #F65; display: none">
        <form id="form<?php echo $menu['id']?>" action="xxx" method="POST">
            <td><?php echo $i?></td>
            <td><?php echo $menu['id']?></td>
            <td><input type="text" id="indonesia<?php echo $menu['id']?>" name="indonesia" value="<?php echo $menu['indonesia']?>" /></td>
            <td><input type="text" id="english<?php echo $menu['id']?>" name="english" value="<?php echo $menu['english']?>" /></td>
			<td><input type="text" id="link<?php echo $menu['id']?>" name="link" size="40" value="<?php echo $menu['link']?>" /></td>
            <td><input type="text" name="parent" size="2" value="<?php echo $menu['parent']?>" /></td>
            <td><input name="submit" type="button" value="Update" onclick="update(<?php echo $menu['id'].",".$i++?>)" /> <input type="button" value="Batal" onclick="batal(<?php echo $menu['id']?>)" /></td>
            </form>
        </tr>

        <?php }?>
        <tr style="background-color: #5DF;">
            <form action="admin/page/insert_sidebar_menu/" method="post" >
            <td>+</td>
            <td>+</td>
            <td><input type="text" name="indonesia" value="" /></td>
            <td><input type="text" name="english" value="" /></td>
			<td><input type="text" name="link" size="40" value="" /></td>
            <td><input type="text" name="parent" value="" size="2" /></td>
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
                url: 'admin/page/update_sidebar_menu/' + id,
                type: 'POST',
                data: dataEdit,
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

<script type="text/javascript">
    function Hapus(id, nomor)
    {
        var dataDelete = $('#form' + id).serialize();
        $.ajax({
                url: 'admin/page/hapus_sidebar_menu/' + id,
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