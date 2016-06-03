
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

	<h3>Tambah Data Dosen</h3>

<div class="">
    <div class=""><strong>Masukan data dosen yang baru</strong></div>
<div class="">

    <form method="post" action="admin/dosen/tambah_dosen" enctype="multipart/form-data">
                <!-- Fieldset -->
                <fieldset>
                    <table>
                        <input type="hidden" name="idnya" />
                        
                        <tr> <td>Name</td> <td>:</td> <td><input type="text" size="60" name="nama" /></td> </tr>
                        <tr> <td>Code</td> <td>:</td> <td><input type="text" size="10" name="kode"  /></td> </tr>
                        <tr> <td>Division</td> <td>:</td> <td><input type="text" size="36" name="divisi" /> &nbsp; id Divisi : <input type="text" size="5" name="id_div" /></td> </tr>
                        <tr> <td>Laboratory</td> <td>:</td> <td><input type="text" size="36" name="Lab" /> &nbsp; id Lab : <input type="text" size="5" name="id_lab" /></td> </tr>
                        <tr> <td>Email</td> <td>:</td> <td><input type="text" name="email" size="60"/></td> </tr>
                        <tr> <td>Birth Day</td> <td>:</td> <td><input type="text" size="30" name="tgl_lahir"/></td> </tr>
                    </table>
                    <br />
                    <table> 
                        <tr><td>Risearch : </td></tr>
                        <tr><td><textarea id="file"  type="text" row="30" cols="46" name="riset"></textarea></td> </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Educational Background : </td></tr>
                        <tr><td><textarea id="file3" type="text" row="30" cols="46" name="pendidikan"></textarea></td> </tr>
                        <tr><td><br /></td></tr>
                        <tr><td>Publication : </td></tr>
                        <tr><td><textarea id="file2" type="text" row="30" cols="46" name="publikasi"></textarea></td> </tr>
                    </table>

                    <p align="center">

                         <input type="submit" name="submit" value="Submit" />
                    </p>
                </fieldset>
                <!-- End of fieldset -->
            </form>
 
</div>
        </div>