<?php
	function renderLayout($contentFile, $variables = array())
	{
		$contentFilePath = PAGES_PATH . "/" . $contentFile;
	
		if (count($variables) > 0) {
			foreach ($variables as $key => $value) {
				if (strlen($key) > 0) {
					${$key} = $value;
				}
			}
		}

		require_once(TEMPLATES_PATH . "/header.php");
	
		if (file_exists($contentFilePath)) {
			require_once($contentFilePath);
		} else {
			require_once(TEMPLATES_PATH . "/error.php");
		}
	
		require_once(TEMPLATES_PATH . "/footer.php");
	}
?>