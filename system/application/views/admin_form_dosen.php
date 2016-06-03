
<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">


	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "file",
		theme : "advanced",
		skin : "o2k7",
		plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,|,insertdate,inserttime,preview,|,forecolor,backcolor",
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
		elements : "file2",
		theme : "advanced",
		skin : "o2k7",
		plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,|,insertdate,inserttime,preview,|,forecolor,backcolor",
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
		elements : "file3",
		theme : "advanced",
		skin : "o2k7",
		plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,|,insertdate,inserttime,preview,|,forecolor,backcolor",
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
	
<div id="page-heading"><h1>Tambah Database Dosen</h1></div>

<form method="post" action="admin/dosen/tambah_dosen" enctype="multipart/form-data">
    <input type="hidden" name="idnya" />
	
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
			<th valign="top">Nama Dosen</th>
			<td><input type="text" size="60" name="nama" /></td>
		</tr>
		<tr>
			<th valign="top">Kode Dosen</th>
			<td><input type="text" size="10" name="kode"  /></td>
		</tr>
		<tr>
			<th valign="top">Divisi </th>
			<td><input type="text" size="36" name="divisi" /> &nbsp; id Divisi : <input type="text" size="5" name="id_div" /> </td>
		</tr>
		<tr>
			<th valign="top">Laboratory </th>
			<td><input type="text" size="36" name="Lab" /> &nbsp; id Lab : <input type="text" size="5" name="id_lab" /></td>
		</tr>
		<tr>
			<th valign="top">Email</th>
			<td><input type="text" name="email" size="60"/></td> 
		</tr>
		<tr>
			<th valign="top">Tanggal Lahir</th>
			<td><input type="text" size="30" name="tgl_lahir"/></td> 
		</tr>
		<tr>
			<th valign="top">&nbsp;</th>
			<td></td> 
		</tr>
		<tr>
			<th valign="top">Research</th>
			<td><textarea id="file"  type="text" row="30" cols="50" name="riset"></textarea></td> 
		</tr>
		<tr>
			<th valign="top">&nbsp;</th>
			<td></td> 
		</tr>
		<tr>
			<th valign="top">Educational Background</th>
			<td><textarea id="file3" type="text" row="30" cols="50" name="pendidikan"></textarea></td> 
		</tr>
		<tr>
			<th valign="top">&nbsp;</th>
			<td></td> 
		</tr>
		<tr>
			<th valign="top">Publikasi</th>
			<td><textarea id="file2" type="text" row="30" cols="50" name="publikasi"></textarea></td> 
		</tr>
	<tr>
		<th valign="top">&nbsp;</th>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" name="submit" value="Submit" class="form-submit"/>
		</td>
		
	</tr>
	
	</table>
	<!-- end id-form  -->

	</td>
	<td></td>
	</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
</div>
</td>
</tr>
	<div class="clear">&nbsp;</div>
</table>
</div>