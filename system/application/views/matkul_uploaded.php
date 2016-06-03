<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/folder_32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Upload Materi</a></h2>
 <br />
<div class="isi">
    <div class="top style"><strong>Upload Materi <?php echo $kode_matkul?></strong></div> <br />
<div class="mid">
    <form action="materi/do_upload/<?php echo $kode_matkul?>" method="post" enctype="multipart/form-data" >
       <table  width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <thead>
                <tr style=" font-size:14px; font-family:arial; color:white; padding:5px;">
                    <td style="padding:5px;" align="center" bgcolor="#181C23">
                        No
                    </td >
                    <td style="padding:5px;" align="center" bgcolor="#181C23">
                        Judul
                    </td>
                    
                    <td style="padding:5px;" align="center" bgcolor="#181C23">
                        Pengupload
                    </td>
                    <td style="padding:5px;" align="center" bgcolor="#181C23">
                        Nama Dokumen
                    </td>
					
					
                </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach($matkul as $m){?>
            <tr>
                <td align=center bgcolor="#FFFFFF" style="padding:5px;"><?php echo $i++?></td>
                <td bgcolor="#FFFFFF" style="padding:5px;"><?php echo $m['judul']?></td>
                <td align=center bgcolor="#FFFFFF" style="padding:5px;"><?php echo $m['pengupload']?></td>
                <td bgcolor="#FFFFFF" width="260px" style="padding:5px;"><?php echo $m['nama_file']?></td>
			</tr>
            <?php }?>
        </tbody>
        </table>
		<br />
		<b align=rigth><a style="text-decoration:none;" href="materi/matkul_upload/<?php echo $m['kode_matkul']?>">[Upload Materi]</a></b>
    </form>
</div>
        </div>