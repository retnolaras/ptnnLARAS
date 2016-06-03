<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/bubble_48.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Forum</a></h2> 

<br /><br />
<table  width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
    <tr style=" font-size:14px; font-family:arial; color:white; padding:5px;" >
        <td width="6%" style="padding:5px;" align="center" bgcolor="#181C23"><strong>No</strong></td>
        <td width="53%" style="padding:5px;" align="center" bgcolor="#181C23"><strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Topik";} else {echo "Topic";} ?></strong></td>
        <td width="15%" style="padding:5px;" align="center" bgcolor="#181C23"><strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Lihat";} else {echo "Views";} ?></strong></td>
        <td width="13%" style="padding:5px;" align="center" bgcolor="#181C23"><strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Balasan";} else {echo "Replies";} ?></strong></td>
        <td width="13%" style="padding:5px;" align="center" bgcolor="#181C23"><strong><?php if($this->session->userdata('lang')=="indonesia") {echo "Tanggal";} else {echo "Date/Time";} ?></strong></td>
    </tr>

    <?php
	$i=1;
    foreach ($forum_question as $rows) { // Start looping table row
    ?>
        <tr>
            <td align=center bgcolor="#FFFFFF"><b><?php echo $i ?></b></td>
            <td bgcolor="#FFFFFF" style="padding-left:10px;"><a style="text-decoration:none;" href="forum/view_topic/<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
        </tr>
		
    <?php
// Exit looping and close connection
    $i++; }
    mysql_close();
    ?>
</table>
<br />
<br /><br />
<p align=right> <a href="forum/create_topic"><strong><input type="button" value="<?php if($this->session->userdata('lang')=="indonesia") {echo "Buat Topik Baru";} else {echo "Create New Topic";} ?>"/></strong> </a> </p>
