<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" ng-app="app"
	ng-controller="AppCtrl">
    <head>
    <meta charset="utf-8" />
    <title page-title></title>
    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

</head>
<body>
    <div ui-view autoscroll="false"></div>
    
    <script src="<?php echo asset_url()?>lib/jquery/jquery.min.js"></script>
	<script src="<?php echo asset_url()?>lib/jquery/bootstrap.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular.js"></script>
	<script src="<?php echo asset_url()?>lib/utilities.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-animate/angular-animate.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-cookies/angular-cookies.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-resource/angular-resource.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-sanitize/angular-sanitize.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-touch/angular-touch.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-ui-router/angular-ui-router.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-ocLazyLoad/ocLazyLoad.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-ngStorage/ngStorage.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-ui-utils/angular-ui-utils.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-breadcrumb/angular-breadcrumb.js"></script>
	<script src="<?php echo asset_url()?>lib/angular/angular-ui-bootstrap/ui-bootstrap.js"></script>
	<script src="<?php echo asset_url()?>lib/jquery/slimscroll/jquery.slimscroll.js"></script>
	
	
	<!-- App Config and Routing Scripts -->
	<script src="<?php echo asset_url()?>app/app.js"></script>
	<script src="<?php echo asset_url()?>app/config.js"></script>
	<script src="<?php echo asset_url()?>app/config.lazyload.js"></script>
	<script src="<?php echo asset_url()?>app/config.router.js"></script>
	<script src="<?php echo asset_url()?>app/beyond.js"></script>-->
	<!-- Layout Related Directives -->
	<script src="<?php echo asset_url()?>app/directives/loading.js"></script>
	<script src="<?php echo asset_url()?>app/directives/skin.js"></script>
	<script src="<?php echo asset_url()?>app/directives/sidebar.js"></script>
	<script src="<?php echo asset_url()?>app/directives/header.js"></script>
	<script src="<?php echo asset_url()?>app/directives/navbar.js"></script>
	<script src="<?php echo asset_url()?>app/directives/chatbar.js"></script>
	<script src="<?php echo asset_url()?>app/directives/widget.js"></script>
	
</body>
</html>