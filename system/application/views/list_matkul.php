 <h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/folder_32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Download Materi</a></h2>
 <br />
<div class="isi">
<div class="mid">
           <table  width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#373737">
            <thead>
                <tr style=" font-size:14px; font-family:arial; color:white;" align=center>
                    <td style="padding:5px;">
                        No
                    </td >
                    <td style="padding:5px;">
                        Kode
                    </td>

                    <td style="padding:5px;">
                        Mata Kuliah
                    </td>
                </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach($matkul as $m){?>
            <tr>
                <td align=center bgcolor="#FFFFFF" style="padding:5px;"><?php echo $i++?></td>
                <td bgcolor="#FFFFFF" style="padding:5px;"><?php echo $m['kode_makul']?></td>
                <td bgcolor="#FFFFFF" style="padding:5px;"><a style="text-decoration:none;" href="materi/download/<?php echo $m['kode_makul']?>"> 
					<?php echo $m['nama_makul']?></a></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
</div>
        </div>