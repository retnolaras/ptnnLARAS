<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "indonesia",
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

        	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "english",
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
<!-- /TinyMCE -->
<div id="content">
	
<div id="page-heading"><h1>Edit Artikel Konten</h1>
<a href="admin/artikel">Kembali ke List Artikel</a>
</div>

<form method="post" action="admin/artikel/edit_artikel/<?php echo $artikel->id?>">
    <input type="hidden" value="pos" name="proses" />
    <input type="hidden" name="id" value="<?php echo $artikel->id?>" />
	
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Judul Indonesia:</th>
			<td><input type="text" name="judul_ind" value="<?php echo $artikel->judul_ind?>"/></td>
		</tr>
		<tr>
			<th valign="top">Judul English:</th>
			<td><input type="text" name="judul_eng" value="<?php echo $artikel->judul_eng?>"/></td>
		</tr>
		<tr>
			<th>Kategori</th>
			<td>
				<select name="kategori">
					<option value="1">Halaman / Page</option>
					<?php
					foreach($kategori as $k)
					{?>
						<option value="<?php echo $k['id']?>"<?php if($k['id']==$artikel->kategori) echo " selected"?>><?php echo $k['indonesia'] . " / " . $k['english']?></option>
					<?php
					}
					?>

				</select>
			</td>
            </tr>
		
	<tr>
		<th valign="top">Teks Indonesia</th>
		<td><textarea id="indonesia" name="indonesia" rows="20" cols="80" style="width: 100%"><?php echo $artikel->isi_ind?></textarea> </td>
	</tr>
	<tr>
		<th valign="top">&nbsp;</th>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th valign="top">Teks English</th>
		<td><textarea id="english" name="english" rows="20" cols="80" style="width: 100%"><?php echo $artikel->isi_eng?></textarea> </td>
	</tr>
	
	<tr>
		<th valign="top">&nbsp;</th>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" name="save" value="Submit" class="form-submit"/>
			<input type="reset" name="reset" value="Reset" class="form-reset"/>
		</td>
	</tr>
	
	</table>
	<!-- end id-form  -->

	</td>
	<td>

	
	

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>

	<div class="clear">&nbsp;</div>

</div>