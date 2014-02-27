<?php if ( ! defined('APPPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Joomla! - Open Source Content Management">
  	<title>local-joomla - Administration</title>
  	<link href="http://localhost/joomla/administrator/templates/isis/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  	<link rel="stylesheet" href="./local-joomla - Administration_files/chosen.css" type="text/css">
  	<!--<link rel="stylesheet" href="./local-joomla - Administration_files/template.css" type="text/css">-->
	<?php
		$this->asset->stylesheet('admin/admin');
	?>
  	<style type="text/css">
		html { display:none }
  	</style>
	<style type="text/css">
		/* Responsive Styles */
		@media (max-width: 480px) {
			.view-login .container {
				margin-top: -170px;
			}
			.btn {
				font-size: 13px;
				padding: 4px 10px 4px;
			}
		}
	</style>
	<!--[if lt IE 9]>
		<script src="../media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site com_login view-login layout-default task- itemid- " style="">
	<!-- Container -->
	<div class="container">
		<div id="content">
			<!-- Begin Content -->
			<div id="element-box" class="login well">
				<div id="system-message-container">
					<p>blah</p>
				</div>
			</div>
			<noscript>
				Warning! JavaScript must be enabled for proper operation of the Administrator backend.			
			</noscript>
			<!-- End Content -->
		</div>
	</div>
	<div class="navbar navbar-fixed-bottom hidden-phone">
		<p class="pull-right">
			© 2014 portal		</p>
		<a class="login-joomla" href="http://localhost/portal/" target="_blank" title="portal">portal®</a>
		<a href="http://localhost/portal/" target="_blank" class="pull-left"><i class="icon-share icon-white"></i> Back to home.</a>
	</div>
</body>
</html>