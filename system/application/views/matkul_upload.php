<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/folder_32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Upload Materi</a></h2>
 <br />

    
	<fieldset>
	<legend> <strong>Upload Materi <?php echo $kode_matkul?></strong> </legend>
    <form action="materi/do_upload/<?php echo $kode_matkul?>" method="post" enctype="multipart/form-data" >
        <table>
            <tr>
                <td>Judul materi</td>
                <td> : <input type="text" name="judul" value="" /></td>
            </tr>
            <tr>
                <td>File Materi</td>
                <td> : <input type="file" name="materi" /></td>
            </tr>
			 <tr>
                <Td></Td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <Td></Td>
                <td align=center><input type="submit" name="submit" value="Upload" /></td>
            </tr>
        </table>
    </form>
	</fieldset>
