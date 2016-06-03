<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url() ?>" />
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<link rel="icon" href="images/icon.png" />
<title><?php echo $title ?></title>
</head>
<body>

<div id="wrap">

<div id="header" <?php if($this->session->userdata('lang')=="indonesia") {?>style="background: url('images/logotest6_ind.png')"<?php }?>></div>

		<?php $this->load->view('menu')?>

<div id="content">
<div id="crumb"> <span>
<?php if(isset($breadcrumbs)): ?>
		<?=$breadcrumbs?>
	<?php endif;?> </span></div>
	
<br />
		<div class="right"> 
		<?php echo $this->load->view($view_content);?>
		</div>
		
		<?php $this->load->view('sidebar2')?>

		<div style="clear: both;"> </div>

</div>

<div id="bottom">
<p> <?php if($this->session->userdata('lang')=="indonesia") {echo "Copyright 2011 | Departemen Proteksi Tanaman - Institut Pertanian Bogor.  <br />
Jl. Raya Darmaga Kampus IPB Darmaga Bogor 16680 <br />
Jawa Barat, Indonesia <br />
Telepon. +62 251 8622642, +62 251 8622708 | 
e-Mail : humas_se@ipb.ac.id <br />";} else {echo "Copyright 2011 | Department Of Plants Protection - Bogor Agricultural University.  <br />
Jl. Raya Darmaga Kampus IPB Darmaga Bogor 16680 <br />
West Java, Indonesia <br />
Phone. +62 251 8622642, +62 251 8622708 | 
e-Mail : humas_se@ipb.ac.id <br />";} ?>

</p>

 </div>
</div>
<div id="footer">
<a style="color:#ffffff" href="page/section/1/Home" target="_blank"><?php if($this->session->userdata('lang')=="indonesia") {echo "Beranda";} else {echo "Home";} ?> </a> | <a style="color:#ffffff" href="" target="_blank"><?php if($this->session->userdata('lang')=="indonesia") {echo "Tentang Kami";} else {echo "About This Site";} ?></a> | <a style="color:#ffffff" href="page/section/34/Faculty" target="_blank"><?php if($this->session->userdata('lang')=="indonesia") {echo "Hubungi Kami";} else {echo "Contact Us";} ?>  </a>
</div>

</body>
</html>