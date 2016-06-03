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
<html>
    <head>
        <base href="<?php echo base_url() ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" href="style.css" rel="stylesheet" />
        <link rel="icon" href="images/icon.png" />
        <script type="text/javascript" src="jquery.js"></script>
        
        <title><?php echo $title ?></title>
        <style type="text/css">
            <!--
            .style1 {font-family: Arial, Helvetica, sans-serif}
            .style2 {
                font-size: 12px
            }
            -->
        </style>
    </head>
    <body>
        <div id="container">
            <?php $this->load->view('sidebar')?>
            
                <div id="content">
                    <div class="isi">

                        <div class="mid">
                            <form action="language" method="post">
                                Bahasa/Language:
                                <select name="language" onchange="location.href='index.php/lang/select/' + this.value">
                                    <option>--Pilih--</option>
                                    <option value="indonesia">Indonesia</option>
                                    <option value="english">English</option>
                                </select>
                            </form>

                        </div>
                    </div>
                    <div class="isi">
                        <div class="top style"><strong>
                                &nbsp;</strong></div>
                        <div class="mid">
                            <p align="justify">&nbsp;</p>
                            <?php echo $isi?><br /><br />
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
