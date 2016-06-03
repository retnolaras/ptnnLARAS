<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <base href="<?php echo base_url()?>" />
        <title>
            Admin
        </title>
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
        <link type="text/css" href="style_admin.css" rel="stylesheet" />
    </head>
    <body>
        <div id="header">
            
        </div>
        <div id="menu">
            <a href="admin/artikel">Artikel</a>
            <a href="admin/kategori">Kategori</a>
            <a href="admin/page/top_menu">Top Menu</a>
            <a href="admin/page/sidebar_menu">Sidebar Menu</a>
            <a href="admin/dosen">Dosen</a>
            <a href="admin/mahasiswa">Mahasiswa</a>
            <a href="">Member</a>
        </div>
        <div id="content">
            <?php
            if(isset($view_content)) $this->load->view($view_content);
            ?>

        </div>
        <div id="footer">
            
        </div>

    </body>
</html>