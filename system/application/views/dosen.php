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
<br />
							
         
                            <h5><b><?php if($this->session->userdata('lang')=="indonesia") {echo "1. DIVISI ENTOMOLOGI";}
	else {echo "1. DIVISION OF ENTOMOLOGY";} ?></b></h5>
                            <br />

                            <table border="1" cellspacing="0" style="font-family: arial; text-decoration:none">
                                <tr bgcolor="#181C23" style="color:white"><th width="300px" align=center >Laboratory</th><th width="300px" align=center>Faculty Staff</th></tr>
                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Biosistematika Serangga";}
	else {echo "Insect Biosystematics Laboratory";} ?></td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==1) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Bionomi dan Ekologi Serangga";}
	else {echo "Insect Bionomy And Ecology Laboratory";} ?> </td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==2) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Fisiologi dan Toksikologi";}
	else {echo "Insect Physiology And Toxicology Laboratory ";} ?> </td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==3) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Pengendalian Hayati";}
	else {echo "Biological Control Laboratory ";} ?>  </td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==4) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Patologi Serangga";}
	else {echo "Insect Pathology Laboratory";} ?></td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==5) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Vertebrata Hama";}
	else {echo "Vertebrate Pests Laboratory";} ?>  </td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==6) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>
                            </table>

                            <br /><br />
                            <p align="left"><br /></p>
                            <h5><b><?php if($this->session->userdata('lang')=="indonesia") {echo "2. DIVISI HAMA TANAMAN";}
	else {echo "2. DIVISION OF PLANT PATHOLOGY";} ?></b></h5>
                            <br />
                            <table cellspacing="0" border="1px solid black;" style="font-family: arial; text-decoration:none">
                                <tr bgcolor="#181C23" style="color:white"><th width="300px" align=center >Laboratory</th><th width="300px" align=center>Faculty Staff</th></tr>
                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Mikologi";}
	else {echo "Plant Mycology Laboratory";} ?></td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==7) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Bakteriologi Tumbuhan";}
	else {echo "Plant Bacteriology Laboratory";} ?> </td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==8) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Virologi Tumbuhan";}
	else {echo "Plant Virology Laboratory";} ?>  </td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==9) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                <tr><td style="padding:5px"><?php if($this->session->userdata('lang')=="indonesia") {echo "Laboratorium Nematologi Tumbuhan";}
	else {echo "Plant Namatodes Laboratory";} ?>    </td>
                                    <td style="font-family: arial; text-decoration:none"> <?php $i = 1; foreach ($daftar_dosen as $dosen) :
                                            if($dosen['id_lab']==10) { ?>
                                        <ul>
                                            <li <?php if(($i % 2))  ?>> <?php echo anchor('dosen/detail_dosen/' . $dosen['id'], $dosen['nama'] ) ?>  </li>
                                            <?php } ?>
                                        </ul>
                                        <?php $i++; endforeach; ?>
                                    </td>
                                </tr>

                                
                            </table>
							
							
							
							
							
							
							
							
							
							

                          

     
               