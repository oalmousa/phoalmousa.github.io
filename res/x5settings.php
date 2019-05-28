<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'https://photos.mrosama.com/',
	'homepage_url' => 'https://photos.mrosama.com/index.html',
	'icon' => 'https://photos.mrosama.com/favImage.png',
	'version' => '13.1.8.23',
	'sitename' => 'Photos of Osama Almousa',
	'public_folder' => '',
	'salt' => '9bm80xaqq6hxf5iy93hq6t25bw0apb4ty16ovmlvi',
);


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_jiwzo0cu.png',
	'theme' => 'orange'
);
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Check word:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php