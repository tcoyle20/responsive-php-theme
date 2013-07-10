<?php
	function renderLayout($contentFile, $variables = array())
	{
		$contentFilePath = PAGES_PATH . "/" . $contentFile;
	
		// each key in the $variables array will become a variable
		if (count($variables) > 0) {
			foreach ($variables as $key => $value) {
				if (strlen($key) > 0) {
					${$key} = $value;
				}
			}
		}
	
		require_once(TEMPLATES_PATH . "/header.php");
	
		// main row
		echo "<div class=\"main\">\n"
				 ."<section>\n";// page content
	
		if (file_exists($contentFilePath)) {
			require_once($contentFilePath);
		} else {
			require_once(TEMPLATES_PATH . "/error.php");
		}
	
		// close page content
		echo "</section>\n"
				 ."<aside>\n";//sidebar

		//display widget or widgets
		$multiWidgets = strpos($widgets, ",");
		if($multiWidgets) {
			$widgets = explode(",", $widgets);
			foreach($widgets as $widget) {
				require_once(TEMPLATES_PATH ."/". trim($widget));
			}
		} else {
			require_once(TEMPLATES_PATH ."/". trim($widget));
		}

		// close sidebar and main row
		echo "</aside>\n"
				 ."</div>";
	
		require_once(TEMPLATES_PATH . "/footer.php");
	}
?>