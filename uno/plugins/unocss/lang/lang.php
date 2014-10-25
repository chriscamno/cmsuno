<?php
	$langPlug = array(
		"fr" => "fr_FR.utf8",
		"en" => "en_US"
		);
	//	
	if ($langPlug[$lang])
		{
		putenv('LC_ALL='.$langPlug[$lang]);
		setlocale(LC_ALL, $langPlug[$lang]);
		bindtextdomain("unocss", dirname (__FILE__));
		textdomain("unocss");
		}
?>