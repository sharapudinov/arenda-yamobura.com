<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^={SITE_DIR.\"articles/\"}#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/articles/index.php",
	),
	array(
		"CONDITION" => "#^/services-in-city/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/services-in-city/index.php",
	),
	array(
		"CONDITION" => "#^/spectehnica/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/spectehnica/index.php",
	),
	array(
		"CONDITION" => "#^/projects/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/projects/index.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/index.php",
	),
);

?>