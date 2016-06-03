<a href="admin/artikel/tambah_artikel">Tambah Artikel</a>
<br /><br />
<table cellpadding="10px" cellspacing="0">
    <tr style="background-color: #AAA">
        <td>ID</td>
        <td>Judul Indonesia</td>
        <td>Judul English</td>
        <td>Kategori</td>
        <td></td>
    </tr>
<?php
foreach ($daftar_artikel as $artikel)
{?>
    <tr>
        <td style="background-color: #CCC"><?php echo $artikel['id']?></td>
        <td style="background-color: #DDD"><?php echo $artikel['judul_ind']?></td>
        <td style="background-color: #CCC"><?php echo $artikel['judul_eng']?></td>
        <td style="background-color: #DDD"><?php echo $artikel['kategori']?></td>
        <td style="background-color: #CCC"><a style="text-decoration:none;" href="admin/artikel/edit_artikel/<?php echo $artikel['id']?>"><input type="button" value="Edit"  /></a>
               <a style="text-decoration:none;" href="admin/artikel/hapus_artikel/<?php echo $artikel['id']?>" onclick="return confirm('Apakah yakin ingin menghapus file ini?')"><input type="button" value="Hapus"  /> </a>
        </td>
    </tr>
<?php
}
?>
</table>