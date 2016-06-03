<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/bubble_48.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Forum</a></h2> 
<br />
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO forum_question(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($sql);

if($result){
?>

<div class="info">
	<div class="messages"><h3 style="font-size:14px; font-family:arial;"> <b> Succesfull</b></h3>
	<a href=forum/main>View your topic</a>
	</div>
</div>
		
<?php }
else {
echo "ERROR";
}

?>