<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!isset($this->session->userdata['logged_in']['username'])) {
	header("Location: ".portal_url() ."login"); 
    exit();
}else{
	
}
?>
<!DOCTYPE html>
<html lang="en">
	<?php include('ui/header.php');?>
<body>
	<?php include('ui/menu.php')?>
	
	<?php include('ui/dashboard.php')?>
	
	<?php include('ui/script.php')?>
</body>
</html>

