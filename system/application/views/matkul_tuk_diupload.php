<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/folder_32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Upload Materi</a></h2>
 <br />
<div class="isi">
    <div class="top style"><strong>Upload Materi</strong></div>
<div class="mid">
     <p align="right">
        <?php echo anchor('dosen/logout', 'Logout') ?> </p> <br />
    <table  width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#373737">
        <thead>
            <tr style=" font-size:14px; font-family:arial; color:white;" align=center>
                <td style="padding:5px;">
                    No
                </td>
                <td style="padding:5px;">
                    Kode Mata Kuliah
                </td>
                <td style="padding:5px;">
                    Nama Mata Kuliah
                </td>
                <td style="padding:5px;">
					Aksi
                </td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($matkul as $m){?>
            <tr>
                <td align=center bgcolor="#FFFFFF" style="padding:5px;"><?php echo $i++?></td>
                <td bgcolor="#FFFFFF" style="padding:5px;"><?php echo $m['kode_matkul']?></td>
                <td bgcolor="#FFFFFF" style="padding:5px;"><?php echo $m['nama_makul']?></td>
                <td align=center bgcolor="#FFFFFF" color="#FFFFFF" style="padding:5px;"><a href="materi/matkul_upload/<?php echo $m['kode_matkul']?>">Upload</a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
        </div>