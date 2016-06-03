<div id="menu">
    <ul class="menu">
	<?php
	$top = $top_menu->get_top_menu();
	foreach($top as $t)
	{
	?>
        <li><a href="<?php echo $t['link']?>"><span><?php echo $t['nama']?></span></a>
		<?php
		$sub_menu = $top_menu->get_sub_menu($t['id']);
		?>
            <div><ul>
			<?php foreach ($sub_menu as $s)
			{?>
                <li><a href="<?php echo $s['link']?>"><span><?php echo $s['nama']?></span></a></li>
			<?php } ?>
                </ul></div>
        </li>
<?php }?>
<?php $date = date("l, d F Y" );?>
	<div id="tanggal" style>
		<h4 >&nbsp; <?php echo $date ; ?></h4>
	</div>
	
</div>