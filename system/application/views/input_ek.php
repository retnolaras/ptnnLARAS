<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/folder_32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Download Handout</a></h2>
 <br />
<fieldset>
<legend><strong>Input Enrollment Key</strong></legend>
        <form action="materi/ek_p/" method="post">
            <input type="hidden" name="kode_matkul" value="<?php echo $matkul['kode_makul']?>" />
Please enter Enrollmentkey for download the handout of  <br /> <b> <?php echo $matkul['nama_makul']?> </b> : <br /><br />  <input type="text" name="ek" />  &nbsp; &nbsp;  <input type="submit" value="Submit" />
        </form>
   
</fieldset>