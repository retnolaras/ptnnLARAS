<div id="header" <?php if($this->session->userdata('lang')=="indonesia") {?>style="background: url('images/1.png')"<?php }?>>

            </div>
            <div id="navbar">


                <ul id="nav">
                    <?php
                    $top = $top_menu->get_top_menu();
                    foreach($top as $t)
                    {
                    ?>
                    <li><a href="<?php echo $t['link']?>"><?php echo $t['nama']?></a>
                        <?php
                        $sub_menu = $top_menu->get_sub_menu($t['id']);
                        ?>
                        <ul>
                        <?php foreach ($sub_menu as $s)
                        {?>
                            <li><a href="<?php echo $s['link']?>"><?php echo $s['nama']?></a></li>
                        <?php }
                        ?>
                </ul>
                    </li>
                    <?php }?>

                </ul> </div>
<div id="content">

                <div class="left">
                <?php
                $side = $sidebar_menu->get_sidebar_menu();
                foreach($side as $s)
                {
                ?>
                    <div class="style1 top"><strong>
                            <?php echo $s['indonesia']?> </strong>
					</div>
                    
					<div class="mid">
                        <ul class="style1 style2">
                    <?php
                    $sub = $sidebar_menu->get_sub_menu($s['id']);
                    foreach($sub as $su)
                    {
                    ?>
                            <li><a href="<?php echo $su['link']?>"><?php echo $su['nama']?></a></li>
                <?php }?>
                        </ul>
                    </div>
                    <br />
                <?php }?>
                    <div class="style1 top"><strong>Counter</strong></div>
                    <div class="mid"><?php if(isset($counter)) echo $counter?></div>
                </div>