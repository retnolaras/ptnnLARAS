<div>
    <table cellspacing="0" cellpadding="10px" width="90%">
        <tr style="background-color: #1D4">
            <th>No</th>
            <th>ID</th>
            <th>Nama Indonesia</th>
            <th>Nama English</th>
            <th>Link</th>
            <th>Parent</th>
            <th></th>
        </tr>
        <?php
        $i=1;
        foreach ($sidebar_menu as $menu)
        {?>

        <tr id="data<?php echo $menu['id']?>" style="background-color: #BFA">
            <td><?php echo $i?></td>
            <td><?php echo $menu['id']?></td>
            <td><?php echo $menu['indonesia']?></td>
            <td><?php echo $menu['english']?></td>
            <td><?php echo $menu['link']?></td>
            <td><?php echo $menu['parent']?></td>
            <td><input type="button" value="Edit" onclick="edit(<?php echo $menu['id']?>)" />
                <a style="text-decoration:none;" href="admin/page/hapus_sidebar_menu/<?php echo $menu['id']?>" onclick="return confirm('Apakah yakin ingin menghapus file ini?')"><input type="button" value="Hapus"  /></a></td>
        </tr>
        <tr id="edit<?php echo $menu['id']?>" style="background-color: #F65; display: none">
        <form id="form<?php echo $menu['id']?>" action="xxx" method="POST">
            <td><?php echo $i?></td>
            <td><?php echo $menu['id']?></td>
            <td><input type="text" id="indonesia<?php echo $menu['id']?>" name="indonesia" value="<?php echo $menu['indonesia']?>" /></td>
            <td><input type="text" id="english<?php echo $menu['id']?>" name="english" value="<?php echo $menu['english']?>" /></td>
            <td><input type="text" id="link<?php echo $menu['id']?>" name="link" size="40" value="<?php echo $menu['link']?>" /></td>
            <td><input type="text" name="parent" size="2" value="<?php echo $menu['parent']?>"</td>
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
            <td><input type="text" name="parent" value="" size="2"</td>
            <td><input name="submit" type="submit" value="Tambah" /> <input name="submit" type="reset" value="Reset" /></td>
            </form>
        </tr>
    </table>
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