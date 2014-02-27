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
  	<script src="./local-joomla - Administration_files/mootools-core.js" type="text/javascript"></script>
  	<script src="./local-joomla - Administration_files/core.js" type="text/javascript"></script>
  	<script src="./local-joomla - Administration_files/jquery.min.js" type="text/javascript"></script>
  	<script src="./local-joomla - Administration_files/jquery-noconflict.js" type="text/javascript"></script>
  	<script src="./local-joomla - Administration_files/jquery-migrate.min.js" type="text/javascript"></script>
  	<script src="./local-joomla - Administration_files/bootstrap.min.js" type="text/javascript"></script>
  	<script src="./local-joomla - Administration_files/chosen.jquery.min.js" type="text/javascript"></script>
  	<script type="text/javascript">
		window.addEvent('domready', function () {if (top == self) {document.documentElement.style.display = 'block'; } else {top.location = self.location; }});
		function keepAlive() {	var myAjax = new Request({method: "get", url: "index.php"}).send();} window.addEvent("domready", function(){ keepAlive.periodical(840000); });
		jQuery(document).ready(function(){
			jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
		});
		
		jQuery(document).ready(function (){
			jQuery('.advancedSelect').chosen({
				disable_search_threshold : 10,
				allow_single_deselect : true
			});
		});
			
	</script>
  	<script type="text/javascript">
    	(function() {
      		var strings = {"JGLOBAL_SELECT_SOME_OPTIONS":"Select some options","JGLOBAL_SELECT_AN_OPTION":"Select an option","JGLOBAL_SELECT_NO_RESULTS_MATCH":"No results match"};
      		if (typeof Joomla == 'undefined') {
        		Joomla = {};
        		Joomla.JText = strings;
      		} else {
        		Joomla.JText.load(strings);
      		}
    	})();
  	</script>

	<script type="text/javascript">
		window.addEvent('domready', function () {
			document.getElementById('form-login').username.select();
			document.getElementById('form-login').username.focus();
		});
	</script>
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
				<img src="./local-joomla - Administration_files/joomla.png" alt="Joomla!">
				<hr>				
				<div id="system-message-container">
				</div>
				<form action="http://localhost/joomla/administrator/index.php" method="post" id="form-login" class="form-inline">
					<fieldset class="loginform">
						<div class="control-group">
							<div class="controls">
								<div class="input-prepend input-append">
									<span class="add-on">
										<i class="icon-user hasTooltip" title="" data-original-title="User Name"></i>
										<label for="mod-login-username" class="element-invisible">
											User Name						
										</label>
									</span>
									<input name="username" tabindex="1" id="mod-login-username" type="text" class="input-medium" placeholder="User Name" size="15">
									<a href="http://localhost/joomla/index.php?option=com_users&view=remind" class="btn width-auto hasTooltip" title="" data-original-title="Forgot your username?">
										<i class="icon-help"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<div class="input-prepend input-append">
									<span class="add-on">
										<i class="icon-lock hasTooltip" title="" data-original-title="Password"></i>
										<label for="mod-login-password" class="element-invisible">
											Password						
										</label>
									</span>
									<input name="passwd" tabindex="2" id="mod-login-password" type="password" class="input-medium" placeholder="Password" size="15">
									<a href="http://localhost/joomla/index.php?option=com_users&view=reset" class="btn width-auto hasTooltip" title="" data-original-title="Forgot your password?">
										<i class="icon-help"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<div class="btn-group pull-left">
									<button tabindex="3" class="btn btn-primary btn-large">
										<i class="icon-lock icon-white"></i> Log in					
									</button>
								</div>
							</div>
						</div>
						<input type="hidden" name="option" value="com_login">
						<input type="hidden" name="task" value="login">
						<input type="hidden" name="return" value="aW5kZXgucGhw">
						<input type="hidden" name="8681f2e36113863a0c01d3ab6f6e54a4" value="1">	
					</fieldset>
				</form>
			</div>
			<noscript>
				Warning! JavaScript must be enabled for proper operation of the Administrator backend.			</noscript>
			<!-- End Content -->
		</div>
	</div>
	<div class="navbar navbar-fixed-bottom hidden-phone">
		<p class="pull-right">
			© 2014 local-joomla		</p>
		<a class="login-joomla" href="http://www.joomla.org/" target="_blank" title="Joomla is free software released under the GNU General Public License.">Joomla!®</a>
		<a href="http://localhost/joomla/" target="_blank" class="pull-left"><i class="icon-share icon-white"></i> Go to site home page.</a>
	</div>
</body>
</html>