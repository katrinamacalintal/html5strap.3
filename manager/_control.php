<?php
	
	# ROOT URL PATH SETTINGS
	if($root=='1'){
		
		# Base URL Path
		function curPageURL() {
			$pageURL = 'http';
			# if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";} // Remove comment if domain is under HTTPS.
			$pageURL .= "://";
			if ($_SERVER["SERVER_PORT"] != "80") {
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].dirname($_SERVER['PHP_SELF']);
			} else {
				$pageURL .= $_SERVER["SERVER_NAME"].dirname($_SERVER['PHP_SELF'])."/";
			}
			return $pageURL;
		}
		$root = curPageURL();

	} elseif($root=='2') {

		# Base URL Path
		function curPageURL() {
			$pageURL = 'http';
			# if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";} // Remove comment if domain is under HTTPS.
			$pageURL .= "://";
			if ($_SERVER["SERVER_PORT"] != "80") {
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].dirname($_SERVER['PHP_SELF']);
			} else {
				$pageURL .= $_SERVER["SERVER_NAME"].mb_substr(dirname($_SERVER['PHP_SELF']),0,-mb_strlen(strrchr(dirname($_SERVER['PHP_SELF']),"/")))."/";
			}
			return $pageURL;
		}
		$root = curPageURL();

	}

?>