<?php

ob_start("compress");

  header("Content-type: text/css; charset: UTF-8");

	## DECLARE EXECUTED CSS FROM PARENT FILE
  $css = $_GET['css'];

	function compress($buffer) {
		# REMOVE CSS COMMENTS
		$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
		# REMOVE TABS, SPACES, NEWLINES
		$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

		return $buffer;
	}


	# ANDROID BROWSER DETECTION
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	if(stripos($ua,'android') !== false) {
		# create alternative svg class for icons that are missing
		include ('strap-android.css');	
	}

	## START IMPORTING & COMPRESSING

	# FONTS
	include ('strap-fonts.css');

	# SCAFFOLDING
	include('bs-scaffolding.css');

	# BASE CSS
	include('bs-base.css');

	# VECTOR ICONS
	include('bs-icons.css');

	# COMPONENTS
	include('bs-components.css');

	# JS COMPONENTS
	include('bs-jscomponents.css');

	# MISCELLANEOUS
	include('bs-misc.css');

	## BELOW THIS LINE IS BASE ON PAGE CONDITION

	include ('strap-core.css');

	if($css=='home') {
		# HOME
		include ('strap-home.css');
		include ('media-responsive.css');
	} elseif($css=='page') {
		# PAGE
		include ('strap-page.css');
	}

	## IF RESPONSIVE CSS IS ENABLE IT MUST BE AT THE LAST
	## RULE TO OVERRIDE STYLES

	# RESPONSIVE CSS

ob_end_flush();

?>