<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <base href="<?php echo base_url() ?>" />
        <meta http-equiv="Content-Language" content="English" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="jscripts/jquery.slideshow.js"></script>
        
        <script type="text/javascript" src="menu.js"></script>
        <script type="text/javascript">
                $(document).ready(function() {
                        $('#slider').slideShow({
                                interval: 3,
                                start: 'random'
                        });
                });
        </script>
        <link rel="icon" href="images/icon.png" />
        <title><?php echo $title ?></title>
    </head>
    <body>

        <div id="wrap">

            <div id="header" <?php if ($this->session->userdata('lang') == "indonesia") { ?>style="background: url('images/logotest6_ind.png')"<?php } ?>></div>

            <?php $this->load->view('menu') ?>

            <div id="content">
                <div id="crumb"> <span>
                        <?php if (isset($breadcrumbs)): ?>
                            <?= $breadcrumbs ?>
                        <?php endif; ?> </span>
                </div>
                <br />
                <div class="right"> 
                    <?php if($slider) {?>
                    <div id="slider">
                        <div class="slideShow">
                            <ul class="slides">
                                <?php foreach($slider as $s){?>
                                <li class="slide"><center>
                                        <img src="pictures/<?php echo $s['gambar']?>" style="margin: auto; max-height: 300px; max-width: 600px" />
                                    </center></li>
                                <?php }?>
                            </ul>
                        </div>


                    </div>
                    <br />
                    <?php } ?>
					
					<h2 style="border-bottom: 2px solid #CCCCCC;"><img src="images/news.jpg" alt="" width="25" height="25" /><a href="#"> &nbsp;<?php echo $title;?></a></h2>
					
							<?php echo $isi; ?> </p>
							
				<div class="right_bottom">
		<div  id="list-news">
			<h2 style="border-bottom: 2px solid #cccccc;"><img src="images/news.jpg" alt="" width="25" height="25" /><a href="#">&nbsp; <?php if($this->session->userdata('lang')=="indonesia") {echo "Berita";}
	else {echo "News";} ?></a></h2>
		<h3 style="margin-top:5px;"><a href=""> <?php echo $judulberita; ?> </a>
		<p style="margin-left:-20px; font-size:10px;"> <?php echo $tanggalberita ?> </p></h3>
		<p style="margin-left:-20px;">
		<?php echo $isiberita ?></p>
			
			
		</div>
		
		<div  id="list-news2">
		<h2 style="border-bottom: 2px solid #cccccc;"><img src="images/news.jpg" alt="" width="25" height="25" /><a href="#">&nbsp; <?php if($this->session->userdata('lang')=="indonesia") {echo "Berita Lainnya";}
	else {echo "Other News";} ?></a></h2>
			
			<ul style="list-style:none; margin-left:-20px; margin-top:5px; ">
				<?php $i = 0;
				while($i < 4){
				?>
				<li> 
					<h3><a href="index.php/page/section/<?php echo $sub[$i]['id']; ?>"> <?php if ($this->session->userdata('lang') == "indonesia") echo $sub[$i]['judul_ind']; else echo $sub[$i]['judul_eng']; ?> </a><p style="margin-left:-20px; font-size:10px;"> </p></h3>				
				</li>
				<?php ; $i++;  } ?>
			</ul>
			
		</div>
		
		<div style="clear: both;"> </div>
		</div>
                </div>

                <?php $this->load->view('sidebar2') ?>

                <div style="clear: both;"> </div>

            </div>

            <div id="bottom">
                <p> <?php if ($this->session->userdata('lang') == "indonesia") {
                    echo "Copyright &copy; 2011 - 2014 | Departemen Proteksi Tanaman - Institut Pertanian Bogor.  <br />
Jl. Raya Darmaga Kampus IPB Darmaga Bogor 16680 <br />
Jawa Barat, Indonesia <br />
Telepon. +62 251 8622642, +62 251 8622708 | 
e-Mail : humas_se@ipb.ac.id <br />";
                } else {
                    echo "Copyright &copy; 2011 - 2014 | Department of Plants Protection - Bogor Agricultural University.  <br />
Jl. Raya Darmaga Kampus IPB Darmaga Bogor 16680 <br />
West Java, Indonesia <br />
Phone. +62 251 8622642, +62 251 8622708 | 
e-Mail : humas_se@ipb.ac.id <br />";
                } ?>

                </p>

            </div>
        </div>
        <div id="footer">
            <a style="color:#ffffff" href="page/section/1/Home" target="_blank"><?php if ($this->session->userdata('lang') == "indonesia") {
                    echo "Beranda";
                } else {
                    echo "Home";
                } ?> </a> | <a style="color:#ffffff" href="" target="_blank"><?php if ($this->session->userdata('lang') == "indonesia") {
                    echo "Tentang Kami";
                } else {
                    echo "About This Site";
                } ?></a> | <a style="color:#ffffff" href="page/section/34/Faculty" target="_blank"><?php if ($this->session->userdata('lang') == "indonesia") {
                    echo "Hubungi Kami";
                } else {
                    echo "Contact Us";
                } ?>  </a>
        </div>

    </body>
</html>