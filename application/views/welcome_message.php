<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<!--<link href="<?php echo asset_url()?>css/style.css" />-->
	<?php echo link_tag('firststep/assets/css/style.css')?>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
      <?php include('index_dupe.php'); ?>
	<div id="body">
	
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>
	
	arrays
	
	<?php
	
	$arrayEle=array('name'=>"kalaiselvan",'age'=>32,'gender'=>"Male");
	
	echo element('name',$arrayEle). "<br/>" ;
	
	echo element('sex',$arrayEle). "----------<br/>";
	
	echo element('genders',$arrayEle,'N/A'). "<br/>";
	
	$email="kalai6095@gmail.com";
	function isValidEmail($email){
		//return preg_match();
		echo $email. "--------------------------email";
	}
	echo isValidEmail($email);
	?>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>