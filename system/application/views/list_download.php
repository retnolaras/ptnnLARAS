<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/folder_32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Download Materi</a></h2>
 <br />
<div class="isi">
    <div class="top style"><strong>Download Materi <?php echo $kode_matkul?></strong></div>
	<br />
<div class="mid">
    <form action="materi/do_upload/<?php echo $kode_matkul?>" method="post" enctype="multipart/form-data" >
        <table  width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <thead>
                <tr style=" font-size:14px; font-family:arial; color:white; padding:5px;" >
                    <td style="padding:5px;" align="center" bgcolor="#181C23">
                        No
                    </td>
                    <td style="padding:5px;" align="center" bgcolor="#181C23">
                        Judul
                    </td >

                    <td style="padding:5px;" align="center" bgcolor="#181C23">
                        Pengupload
                    </td>
                    <td style="padding:5px;" align="center" bgcolor="#181C23">
                        Nama Dokumen
                    </td>
                    <td style="padding:5px;" align="center" bgcolor="#181C23">
					Unduh Materi
                    </td>
                </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach($matkul as $m){?>
            <tr>
                <td style="padding:5px;" align=center bgcolor="#FFFFFF"><?php echo $i++?></td>
                <td style="padding:5px;" bgcolor="#FFFFFF"><?php echo $m['judul']?></td>
                <td style="padding:5px;" bgcolor="#FFFFFF"><?php echo $m['pengupload']?></td>
                <td style="padding:5px;" bgcolor="#FFFFFF"><?php echo $m['nama_file']?></td>
                <td style="padding:5px;" align=center bgcolor="#FFFFFF"><input type="button" onclick="location.href='materi/do_download/<?php echo $m['id']?>'" value="Download" /></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
    </form>
</div>
        </div>