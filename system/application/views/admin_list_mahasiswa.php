<table cellpadding="10px" cellspacing="0">
    <tr style="background-color: #AAA">
        <td>No</td>
        <td>Nama</td>
        <td>NRP</td>
        <td></td>
    </tr>
<?php
        $i=1;
        foreach ($mahasiswa as $list)
        {?>

        <tr id="data<?php echo $list['id']?>" style="background-color: #BFA">
            <td><?php echo $i?></td>
            <td><?php echo $list['nama']?></td>
            <td><?php echo $list['nrp']?></td>
            <td><input type="button" value="Edit"  /> <input type="button" value="Hapus"  /></td>
        </tr>
<?php
$i++; }
?>
</table>

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
        if (confirm("Apakah Anda yakin hendak menghapus data ini? data yang sudah dihapus tidak dapat dikembalikan?")){
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