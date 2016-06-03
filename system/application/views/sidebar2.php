<div class="left"> 

	<h2>Language/Bahasa</h2>
	<form action="language" method="post">
		<ul>  <img src="images/bahasa_icon.png" alt="" height="25" width="25"/> &nbsp;&nbsp;
		<select name="language" onchange="location.href='index.php/lang/select/' + this.value" style="margin-top:-10px;">
			<option>--Pilih--</option>
			<option value="indonesia">Indonesia</option>
			<option value="english">English</option>
		</select>
		</ul>
	 </form>
<?php
$side = $sidebar_menu->get_sidebar_menu();
foreach($side as $s)
{
?>
	<h2><?php if($this->session->userdata('lang')=="indonesia") {echo $s['indonesia'];}
	else {echo $s['english'];} ?> </h2>
		<ul>
		<?php
			$sub = $sidebar_menu->get_sub_menu($s['id']);
			foreach($sub as $su)
			{
		?>
			<li><a href="<?php echo $su['link']?>"><?php echo $su['nama']?></a></li> 
		<?php }?>
		</ul>
<?php }?>
<h2><?php if($this->session->userdata('lang')=="indonesia") {echo 'Materi';}
	else {echo 'Course';} ?> </h2>
<ul>
	<?php
$mat = $sidebar_menu->get_mat_list();
$i = 0;
while($i<3){
?>
<li><a href="materi/ek_input/<?php ?>"><?php echo $mat[$i]['judul']; echo ' - ' ; echo $mat[$i]['kode_matkul']?></a></li> 
		<?php ; $i++;  }?>
		</ul>
<h2>Counter/Visitor</h2>
<br />
<div id="counter">
	<b><p align=center><?php if(isset($counter)) echo $counter?> </div> <br /></p></b>
	 

</div>