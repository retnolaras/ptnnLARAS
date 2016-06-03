<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
		// General options
		mode : "exact",
		elements : "detail",
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
				<fieldset>
					<legend> <h3 style=" font-size:14px; font-family:arial;"> <b> Create New Topic</b></h3></legend>
                        <form id="form1" name="form1" method="post" action="forum/add_topic">
                        <table>
                                    <tr>
                                        <td align=right><strong>Name : &nbsp;&nbsp;</strong></td>                          
                                        <td><input name="name" type="text" id="name" size="50" /></td><br />
                                    </tr>
                                    <tr>
                                        <td width="8%" align=right><strong>Email : &nbsp;&nbsp;</strong></td>                  
                                        <td width="80%"><input name="email" type="text" id="email" size="50" /></td>
                                    </tr>
									<tr>
                                        <td width="8%"align=right valign=top><strong>Topic : &nbsp;&nbsp;</strong></td>
                                        
                                        <td width="80%"><textarea name="topic" cols="50" rows="3" id="topic"></textarea></td>
                                    </tr>
						</table>
									
									<br />
                                    <strong >&nbsp;&nbsp;&nbsp;&nbsp;Detail :</strong><br /><br />
                                    <textarea name="detail" cols="50" rows="3" id="detail"></textarea>
                                    <br />
									         
                                    <p align=right>
									<input type="submit" name="Submit" value="Submit"/> 
									<input type="reset" name="Submit2" value="Reset" /></p>       
					
						</form>
					</fieldset>


<?php /*
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
    <form id="form1" name="form1" method="post" action="forum/add_topic">
        <td>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                <tr>
                    <td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
                </tr>
                <tr>
                    <td width="14%"><strong>Topic</strong></td>
                    <td width="2%">:</td>
                    <td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
                </tr>
                <tr>
                    <td valign="top"><strong>Detail </strong></td>
                    <td valign="top">:</td>
                    <td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>:</td>
                    <td><input name="name" type="text" id="name" size="50" /></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>:</td>
                    <td><input name="email" type="text" id="email" size="50" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="Submit" value="Submit"  /> <input type="reset" name="Submit2" value="Reset" /></td>
                </tr>
            </table>
        </td>
    </form>
</tr>
</table>
*/ ?>