<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url() ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login Administrator</title>
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
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<p style="color:white">ADMINISTRATOR WEB </p>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<?php if (isset($error)) echo $error?>
		<form action="admin/login/proses_login" method="POST">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" value="" class="login-inp"/></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" value="" onfocus="this.value=''" class="login-inp" />
			</td>
		</tr>
		<tr>
			<th></th>
			
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" value="Login" class="submit-login" /></td>
		</tr>
		</table>
		</form>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>