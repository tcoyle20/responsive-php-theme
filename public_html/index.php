<?php
	require_once(realpath(dirname(__FILE__) . "/../system/config.php"));
	require_once(TEMPLATES_PATH . "/layoutRightSidebar.php");

	$variables = array(
		'title' => 'Project Home Page',
		'description' => 'Meta tag in head',
		'widgets' => $config["widgets"]["features"]
								.","
								.$config["widgets"]["using"]
								.","
								.$config["widgets"]["newsletter"]
	);
	
	renderLayout("_home.php", $variables);
?>