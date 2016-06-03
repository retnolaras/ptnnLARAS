<?php echo anchor('admin/dosen/insert_dosen', 'Tambahkan data dosen baru') ?>
<br />
<br />
<table cellpadding="10px" cellspacing="0">
    <tr style="background-color: #AAA">
        <td>No</td>
        <td>Nama Dosen</td>
        <td>Divisi</td>
        <td>Laboratory</td>
        <td></td>
    </tr>
<?php
        $i=1;
        foreach ($dosen as $list)
        {?>

        <tr id="data<?php echo $list['id']?>" style="background-color: #BFA">
            <td><?php echo $i?></td>
            <td><?php echo $list['nama']?></td>
            <td><?php echo $list['divisi']?></td>
            <td><?php echo $list['Lab']?></td>
            <td><a style="text-decoration:none;" href="admin/dosen/edit_dosen/<?php echo $list['id']?>"><input type="button" value="Edit"  /> </a>
                <a style="text-decoration:none;" href="admin/dosen/hapus_dosen/<?php echo $list['id']?>" onclick="return confirm('Apakah yakin ingin menghapus file ini?')"><input type="button" value="Hapus"  /> </a></td>
        </tr>
<?php
$i++; }
?>
</table>