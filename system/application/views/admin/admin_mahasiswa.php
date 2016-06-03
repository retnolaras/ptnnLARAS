<div>
    <table cellspacing="0" cellpadding="10px" width="90%">
        <tr style="background-color: #1D4">
            <th>No</th>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>NRP</th>
            <th>Username</th>
            <th>Password</th>
            <th></th>
        </tr>
        <?php
        $i=1;
        foreach ($mahasiswa as $list)
        {?>

        <tr id="data<?php echo $list['id']?>" style="background-color: #BFA">
            <td><?php echo $i?></td>
            <td><?php echo $list['id']?></td>
            <td><?php echo $list['nama']?></td>
            <td><?php echo $list['nrp']?></td>
            <td><?php echo $list['username']?></td>
            <td><?php echo $list['password']?></td>
            <td><input type="button" value="Edit" onclick="edit(<?php echo $list['id']?>)" /> <input type="button" value="Hapus" onclick="hapus(<?php echo $list['id']?>)" /></td>
        </tr>
        <tr id="edit<?php echo $list['id']?>" style="background-color: #F65; display: none">
        <form id="form<?php echo $list['id']?>" action="xxx" method="POST">
            <td><?php echo $i?></td>
            <td><?php echo $list['id']?></td>
            <td><input type="text" id="nama<?php echo $list['id']?>" name="nama" value="<?php echo $list['nama']?>" /></td>
            <td><input type="text" id="nrp<?php echo $list['id']?>" name="nrp" value="<?php echo $list['nrp']?>" /></td>
            <td><input type="text" id="username<?php echo $list['id']?>" name="username" value="<?php echo $list['username']?>" /></td>
            <td><input type="text" id="password<?php echo $list['id']?>" name="password" value="<?php echo $list['password']?>" /></td>
            <td><input name="submit" type="button" value="Update" onclick="update(<?php echo $list['id'].",".$i++?>)" /> <input type="button" value="Batal" onclick="batal(<?php echo $list['id']?>)" /></td>
        </form>
        </tr>

        <?php }?>
        <tr style="background-color: #5DF;">
            <form action="admin/mahasiswa/insert_mahasiswa" method="post" >
            <td>+</td>
            <td>+</td>
            <td><input type="text" name="nama" value="" /></td>
            <td><input type="text" name="nrp" value="" /></td>
            <td><input type="text" name="username" value="" /></td>
            <td><input type="text" name="password" value="" /></td>
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

    function hapus(id){
        if (confirm("Yakin akan dihapus?")){
           $.ajax({
                    url: 'admin/mahasiswa/hapus_mahasiswa/' + id,
                    success: function() {
                            $('#data'+id).fadeOut();
                    },
                    error: function(){
                            alert("Terjadi kesalahan. Data tidak terhapus.")
                    }
            });
        }
    }
</script>

