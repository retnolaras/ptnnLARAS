<?php /* <html>
  <head>
  <base href="<?php echo base_url() ?>" />
  <title><?php echo $title ?></title>
  </head>
  <form action="language" method="post">
  Bahasa/Language:
  <select name="language" onchange="location.href='index.php/lang/select/' + this.value">
  <option>--Pilih--</option>
  <option value="indonesia">Indonesia</option>
  <option value="english">English</option>
  </select>
  </form>
  sekarang lagi pake bahasa <?php echo $this->session->userdata('lang'); ?><br /><br />
  <?php
  echo $isi;
  ?>
  </html>
  <?php */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/couple32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; <?php if($this->session->userdata('lang')=="indonesia") {echo "Dosen";}
	else {echo "Faculty Member";} ?></a></h2>           
                    
                        
                       
                            <?php foreach($dosen as $row)?>
                            <p align="left">&nbsp;</p>
                            <?php if(($this->session->userdata('id_dosen')==$row['id'])) {?>
                            
							<br />
                            <p align="center"> <img style="border: 3px solid #181C23;" src="fotodosen/<?php echo $row['foto']; ?>" width="150" height="180"/> </p>
                            <br />
                            <div id="basic">
							
                            <h4 style="border-bottom: 2px solid #CCCCCC;"> Basic Profile </h4>
                                <table width="400px" >
                                <tr> <td><b> <?php if($this->session->userdata('lang')=="indonesia") {echo "Nama";}
	else {echo "Name";} ?> </b></td><td> : </td>  <td><?php echo $row['nama']; ?> (<?php echo $row['kode']; ?>)</td> </tr>
                                <tr> <td><b> <?php if($this->session->userdata('lang')=="indonesia") {echo "Divisi";}
                                else {echo "Division";} ?> </b> </td><td> : </td>  <td><?php echo $row['divisi']; ?></td> </tr>
                                <tr> <td><b> <?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium";}
	else {echo "Laboratory";} ?>  </b></td><td> : </td>  <td><?php echo $row['Lab']; ?></td> </tr>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Tanggal Lahir";}
	else {echo "Birth Day";} ?>  </b></td><td> : </td>  <td><?php echo $row['tgl_lahir']; ?></td> </tr>
                                <tr> <td><b> <?php if($this->session->userdata('lang')=="indonesia") {echo "Email";}
	else {echo "Email";} ?>  </b></td><td> : </td>  <td><?php echo $row['email']; ?></td> </tr>
                                </table>
                                
                            
                            <h4 style="border-bottom: 2px solid #CCCCCC;"> Background Profile</h4>
                            <table>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Mata kuliah yang diajar";}
	else {echo "Teaching";} ?> :  </b> <br /></td></tr>
                                <tr><td>
                                <?php $i=1; foreach($matkul as $m){?>
                                        <ul><li><a style="text-decoration:none;" href="dosen/download/<?php echo $m['kode_matkul']?>" ><?php echo $m['nama_makul']; ?></a></li></ul>
                                <?php } ?>
                                    </td> </tr>
                                <tr> <td><br />&nbsp;</td></tr>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Pendidikan";}
	else {echo "Educational Background";} ?> :  </b> <br /></td></tr>
                                <tr><td><?php echo $row['pendidikan']; ?></td> </tr>
                                <tr> <td><br />&nbsp;</td></tr>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Publikasi";}
	else {echo "Publication";} ?> : </b> <br /> </td></tr>
                                <tr> <td><div class="scrollbox"> <?php echo $row['publikasi']; ?></div></td> </tr>

                            </table>
							<p align="right" style="text-decoration: none; color: blue;" > [ <?php echo anchor('dosen/edit_dosen/' . $row['id'], 'Edit Profile')?> ] - [ <?php echo anchor('materi/upload', 'Upload Materi') ?> ] - [ <?php echo anchor('dosen/logout', 'Logout') ?> ]</p> 
                            </div>
                            <?php } else { ?>
                            <p align="right"><?php echo anchor('dosen/login/' . $row['id'], 'Login')?></p>
                            <p align="center" style="text-decoration: none; color: blue;"> <img style="border: 3px solid #181C23;" src="fotodosen/<?php echo $row['foto']; ?>" width="150" height="180"/> </p>
                            <br />
                            <div id="basic">
                            <h4 style="border-bottom: 2px solid #CCCCCC;"> Basic Profile</h4>
                            <table >
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Nama";}
	else {echo "Name";} ?></b></td><td> : </td>  <td><?php echo $row['nama']; ?> (<?php echo $row['kode']; ?>)</td> </tr>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Divisi";}
	else {echo "Division";} ?></b></td><td> : </td>  <td><?php echo $row['divisi']; ?></td> </tr>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium";}
	else {echo "Laboratory";} ?> </b></td><td> : </td>  <td><?php echo $row['Lab']; ?></td> </tr>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Tanggal Lahir";}
	else {echo "Birth Day";} ?> </b></td><td> : </td>  <td><?php echo $row['tgl_lahir']; ?></td> </tr>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Email";}
	else {echo "Email";} ?></b></td><td> : </td>  <td><?php echo $row['email']; ?></td> </tr>
                            </table>
							<br />
                           <h4 style="border-bottom: 2px solid #CCCCCC;"> Background Profile</h4>
                            <table>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Mata kuliah yang diajar";}
	else {echo "Teaching";} ?> :   </b><br /></td></tr>
                                <tr><td class="isi">
                                <?php $i=1; foreach($matkul as $m){?>
                                <ul><li><a style="text-decoration:none;" href="dosen/download/<?php echo $m['kode_matkul']?>" ><?php echo $m['nama_makul']; ?></a></li></ul>
                                     <?php } ?>
                                    </td> </tr>
                                
                                <tr> <td>&nbsp;</td></tr>
                                <tr> <td ><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Pendidikan";}
	else {echo "Educational Background";} ?> :  </b> <br /></td></tr>
                                <tr><td class="isi"><?php echo $row['pendidikan']; ?></td> </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr> <td><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Publikasi";}
	else {echo "Publication";} ?>  :  </b><br /> </td></tr>
                                <tr> <td class="isi">
                                        <div class="scrollbox"><?php echo $row['publikasi']; ?></div></td> </tr>

                            </table>
                            </div>
                            <?php } ?>
                     


           

