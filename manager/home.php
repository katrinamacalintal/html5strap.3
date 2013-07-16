<?
	$root = '1';
	require_once "_control.php";
	require_once "_inheritance.php";
?>
<!doctype html>
<!--[if lte IE 8]><html class="msie no-js" lang="en"><![endif]-->
<!--[if gte IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title> HTML5 Framework </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<link rel="apple-touch-icon" href="<?=$root?>assets/icons/Icon.png"/>
<link href="<?=$root?>assets/icons/favicon.png" type="image/png" rel="shortcut icon">
<link href="<?=$root?>assets/css/strap.css.php?css=<?=$css?>" rel="stylesheet">
<link href="<?=$root?>plugins/sidr/sidr.custom.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=$root?>assets/js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="<?=$root?>assets/js/modernizr.js"></script>
<?=emptyblock('head');?>
</head>
<body>
<div id="sidr" class="device">
	<ul class="unstyled">
		<li class="device-menu">&nbsp;</li>
		<li><a href="#">homepage</a></li>
		<li><a href="#">html5strap</a></li>
		<li><a href="#">bootstrap</a></li>
		<li><a href="#">ico moon</a></li>
		<li><a href="#">php inheritance</a></li>
	</ul>	
</div>
<div id="container">
	<div class="wrap header">
		<header>
			<a href="#sidr" id="sider" class="responsive-menu device">&nbsp;</a>
			<!-- PRE-ACTIVATED FOR RESPONSIVE LAYOUT -->
			<a href="<?=$root?>" id="hdr-logo" data-placement="bottom" data-toggle="tooltip" data-original-title="Go back to Homepage."></a>
			<nav>
				<? include ('includes/menunav.php'); ?>
			</nav>
		</header>
	</div>	
	<div class="wrap content">
		<?=emptyblock('content');?>
	</div>
	<div class="wrap footer">
		<footer>
			<ul class="unstyled clearfix">
				<li class="pull-left">Copyright 2013. iMarkDesigns.</li>
				<li class="pull-right">All Right Reserved.</li>
			</ul>
		</footer>
	</div>
</div>
<!-- INT/EXT JAVASCRIPT -->
<script src="<?=$root?>assets/js/bootstrap.min.js"></script>
<script src="<?=$root?>assets/js/plugins.js"></script>
<script src="<?=$root?>plugins/sidr/sidr.min.js"></script>
<?=emptyblock('script');?>
</body>
</html>
