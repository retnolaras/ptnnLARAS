<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
		// General options
		mode : "exact",
		elements : "a_answer",
		theme : "advanced",
		skin : "o2k7",
		plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
	
<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/bubble_48.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Forum</a></h2> 
<br />
<h3 style="font-size:14px; font-family:arial;"> <b><?php if($this->session->userdata('lang')=="indonesia") {echo "Balasan Topik Forum";} else {echo "View the topics";} ?>  </b></h3><br />
<base href="<?php echo base_url() ?>" />
<table style="font-size:12px; font-family:arial;" width="100%" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
    <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
                <tr>
                    <?php $rows = $topic;
                    ?>
                    <td bgcolor="#181C23" style="color:#ffffff; padding:10px;" ><strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Topik";} else {echo "Topic";} ?> : <?php echo $rows->topic; ?></strong></td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff" style="padding:10px;" ><?php echo $rows->detail; ?></td>
                </tr>

                <tr>
                    <td bgcolor="#F8F7F1" style="padding:10px;" >  
						<strong>By </strong> <?php echo $rows->name; ?><br/>
                        <strong>Email : </strong><?php echo $rows->email; ?><br/>
						<strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Tanggal";} else {echo "Date/time";} ?> : </strong><?php echo $rows->datetime; ?>
					</td>
                </tr>
            </table></td>
    </tr>
</table>
<BR>
<?php
                    foreach ($answer as $a) {
?>



                        <table style="font-size:12px; font-family:arial;" width="100%"  align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
						<tr>
							<td bgcolor="#ffffff" style="padding:10px;" ><b><?php if($this->session->userdata('lang')=="indonesia") {echo "Jawab";} else {echo " Answer";} ?> :  </b> <br /><?php echo $a['a_answer']; ?></td>
						</tr>
						<tr>
							<td bgcolor="#F8F7F1" style="padding:10px;" >
							<strong>By </strong> <?php echo $a['a_email']; ?><br/>
							<strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Tanggal";} else {echo "Date/time";} ?> : </strong><?php echo $a['a_datetime']; ?>
							</td>
						</tr>
						
						
					
                        </table><br>
<?php
                    }
?>


<?php
?>

					<br />
					<fieldset>
					<legend> <h3 style=" font-size:14px; font-family:arial;"> <b><?php if($this->session->userdata('lang')=="indonesia") {echo "Balas Thread";} else {echo "New Replay";} ?> </b></h3></legend>
                        <form name="form1" method="post" action="forum/add_answer">
                        <table>
                                    <tr>
                                        <td><strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Nama";} else {echo "Name";} ?> : </strong></td>                                     
                                        <td><input name="name" type="text" id="a_name" size="45"></td><br />
                                    </tr>
                                    <tr>
                                        <td width="8%"><strong>Email : </strong></td>
                                        
                                        <td width="80%"><input name="email" type="text" id="a_email" size="45"></td>
                                    </tr>
						</table>
									<br />
                                    <strong > <?php if($this->session->userdata('lang')=="indonesia") {echo "Balasan";} else {echo "Answer";} ?> :</strong><br /><br />
                                    <textarea id="a_answer" name="answer" cols="60" rows="3"></textarea>
                                    <br />
									<input name="a_id" type="hidden" value="<?php echo $a_id ?>">                
                                    <p align=right><input type="submit" name="submit" value="Submit"></p>       
					
						</form>
				</fieldset>