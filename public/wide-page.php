<?php
	require_once(realpath(dirname(__FILE__) . "/../system/config.php"));
	require_once(TEMPLATES_PATH . "/layoutWidePage.php");
	
	$variables = array(
		'title' => "A Wider Layout",
		'description' => "Just an alternate layout",
		'baseUrl' => $config["urls"]["baseUrl"]
	);
	
	renderLayout("_wide-page.php", $variables);

?>