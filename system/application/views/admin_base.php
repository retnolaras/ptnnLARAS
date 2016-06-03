<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url()?>" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Administrator</title>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen" title="default" />
<link type="text/css" href="ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.3.2.js"></script>
<script type="text/javascript" src="ui.core.js"></script>
<script type="text/javascript" src="ui.datepicker.js"></script>
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>

<script type="text/javascript">
      $(document).ready(function(){
        $("#tanggal").datepicker();
      });
    </script>

<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 

<script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
            function edit(id)
            {
                $('#data' + id).fadeOut(
                    function()
                    {
                        $('#edit' + id).fadeIn();
                    }
                );
            }
            function batal(id)
            {
                $('#edit' + id).fadeOut(
                    function()
                    {
                        $('#data' + id).fadeIn();
                    }
                );
            }
        </script>
<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<div id="page-top-outer">    
	<div id="page-top">
		<div id="logo">
		<a href=""><img src="images/shared/logo.png" width="700" height="80" alt="" /></a>
		</div>
	</div>
</div>

<div class="clear">&nbsp;</div>

<div class="nav-outer-repeat"> 

<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
			<a href="admin/login/logout" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
	
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
	<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="#"><b>Dashboard</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="admin/artikel">Artikel</a></li>
				<li><a href="admin/kategori">Kategori</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a href="#"><b>Menu</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="admin/page/top_menu">Top Menu</a></li>
				<li><a href="admin/page/sidebar_menu">Sidebar Menu</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#"><b>Kulon</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="#nogo">Materi Kuliah</a></li>
				<li><a href="#nogo">Enrollment Key</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#"><b>Pesan</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="admin/forum_topik">Forum</a></li>
				<li><a href="admin/comment">Komentar</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#"><b>Member</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="admin/dosen">Dosen</a></li>
				<li><a href="#">Password Dosen</a></li>
				<li><a href="admin/mahasiswa">Mahasiswa</a></li>
				<li><a href="admin/Alumni">Alumni</a></li>
				<li><a href="#">Staff</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>

</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer .....................................................................START -->
<div id="content-outer">
<!-- start content -->
			<?php
            if(isset($view_content)) $this->load->view($view_content);
            ?>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	
	
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>