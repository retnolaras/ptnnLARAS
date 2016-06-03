<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/bubble_48.png" alt="" height="25" width="25"/><a href="#">  &nbsp; <?php if($this->session->userdata('lang')=="indonesia") {echo "Kritik dan Saran";}
	else {echo "Comment and Suggest";} ?></a></h2> 
<br />

<fieldset>
					<legend> <h3 style=" font-size:14px; font-family:arial;"> <b> 
					<?php if($this->session->userdata('lang')=="indonesia") {echo "Kritik dan Saran";}
	else {echo "Comment and Suggest";} ?>
					</b></h3></legend>
                        <form name="form1" method="post" action="comment/insert">
                        <table>
                                    <tr>
                                        <td align=right><strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Nama";}
	else {echo "Name";} ?> : &nbsp;&nbsp;</strong></td>                          
                                        <td><input name="nama" type="text" id="nama" size="45"></td><br />
                                    </tr>
                                    <tr>
                                        <td width="8%" align=right><strong>Email : &nbsp;&nbsp;</strong></td>                  
                                        <td width="80%"><input name="email" type="text" id="email" size="45"></td>
                                    </tr>
									<tr>
                                        <td width="15%" align=right><strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Komentar";}
	else {echo "Comment";} ?> : &nbsp;&nbsp;</strong></td>                  
                                        <td width="80%"><textarea name="komentar" cols="45" rows="3" id="komentar"></textarea></td>
                                    </tr>
									
									
						</table>
									
									<br />
                                    									         
                                    <p align=center>
									<input type="submit" name="submit" value="Submit">
									
						</form>
					</fieldset>







