<div>
    <table cellspacing="0" cellpadding="10px" width="90%">
        <tr style="background-color: #1D4">
            <th>No</th>
            <th>ID</th>
            <th>Nama Indonesia</th>
            <th>Nama English</th>
            <th></th>
        </tr>
        <?php
        $i=1;
        foreach ($kategori as $menu)
        {?>

        <tr id="data<?php echo $menu['id']?>" style="background-color: #BFA">
            <td><?php echo $i?></td>
            <td><?php echo $menu['id']?></td>
            <td><?php echo $menu['indonesia']?></td>
            <td><?php echo $menu['english']?></td>
            <td><input type="button" value="Edit" onclick="edit(<?php echo $menu['id']?>)" />
                <a style="text-decoration:none;" href="admin/kategori/hapus_kategori/<?php echo $menu['id']?>" onclick="return confirm('Apakah yakin ingin menghapus file ini?')"><input type="button" value="Hapus"  /></a>
            </td>
        </tr>
        <tr id="edit<?php echo $menu['id']?>" style="background-color: #F65; display: none">
        <form id="form<?php echo $menu['id']?>" action="xxx" method="POST">
            <td><?php echo $i?></td>
            <td><?php echo $menu['id']?></td>
            <td><input type="text" id="indonesia<?php echo $menu['id']?>" name="indonesia" value="<?php echo $menu['indonesia']?>" /></td>
            <td><input type="text" id="english<?php echo $menu['id']?>" name="english" value="<?php echo $menu['english']?>" /></td>
            <td><input name="submit" type="button" value="Update" onclick="update(<?php echo $menu['id'].",".$i++?>)" /> <input type="button" value="Batal" onclick="batal(<?php echo $menu['id']?>)" /></td>
            </form>
        </tr>

        <?php }?>
        <tr style="background-color: #5DF;">
            <form action="admin/kategori/insert_kategori/" method="post" >
            <td>+</td>
            <td>+</td>
            <td><input type="text" name="indonesia" value="" /></td>
            <td><input type="text" name="english" value="" /></td>
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
                url: 'admin/page/update_kategori/' + id,
                type: 'POST',
                data: dataEdit,
                success: function() {
                        $('#data'+id).load('admin/page/load_kategori/' + id + '/' + nomor);
                },
                error: function(){
                        alert("Terjadi kesalahan. Data tidak tersimpan.")
                }
        });
        batal(id);
    }
</script>