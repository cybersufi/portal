<?php if ( ! defined('APPPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Redirecting - <?php echo $site_name; ?></title>
  	<link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	<?php
		$this->asset->stylesheet('global/global-min');
	?>
  	<style type="text/css">
		html { display:none }
  	</style>
</head>

<body class="site com_login view-login layout-default task- itemid- " style="">
	<!-- Container -->
	<div class="container">
		<div id="content">
			<!-- Begin Content -->
			<div id="element-box" class="login well">
				<div id="system-message-container">
					<p>
						<?php
							$this->asset->image('loading.gif', 'Loading Anim', array("width" => "80", "height" => "80", "sytle" => "margin: 10px", "align" => "absmiddle"));
						?>
						Please Wait, Redirecting...<br>
		    			<script type="text/javascript">
							//var base_url = '<?php echo config_item('base_url'); ?>';
							var base_url = site_url;
							if (self == top) {
								document.write('<span>Click <a href="'+base_url+'">here</a> if you are not redirected</span>');
							} else {
								document.write('<span>Click <a href="javascript:parent.change_parent_url()">here</a> if you are not redirected</span>');
							}
						</script>
					</p>
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
			© 2014 portal		
		</p>
		<a href="http://localhost/portal/" target="_blank" class="pull-left"><i class="icon-share icon-white"></i> Back to home.</a>
	</div>
</body>
</html>