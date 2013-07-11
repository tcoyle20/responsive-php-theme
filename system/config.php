<?php
$config = array(
	"db1" => array(
		"dbname" => "database1",
		"username" => "dbUser",
		"password" => "pa$$",
		"host" => "localhost"
	),
	"db2" => array(
		"dbname" => "database2",
		"username" => "dbUser",
		"password" => "pa$$",
		"host" => "localhost"
	),
	"urls" => array(
		"baseUrl" => "http://example.com"
	),
	"paths" => array(
		"system" => "system",
		"images.content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
		"images.layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
	),
	"widgets" => array(
		"features" => "widget-features.php",
		"links" => "widget-links.php",
		"newsletter" => "widget-newsletter.php",
		"using" => "widget-using.php" 
	)
);

/*
Below can also be placed in environment variables
*/
defined('DS')
	or define('DS', DIRECTORY_SEPARATOR);

defined('ROOT')
	or define('ROOT', dirname(dirname(__FILE__)));

defined("CLASS_PATH")
	or define("CLASS_PATH", realpath(dirname(__FILE__) . '/class'));
	
defined("TEMPLATES_PATH")
	or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

defined("PAGES_PATH")
	or define("PAGES_PATH", realpath(dirname(__FILE__) . '/pages'));

/*
	Disable in production!
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
?>