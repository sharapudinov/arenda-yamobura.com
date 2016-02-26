<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^={SITE_DIR.\"articles/\"}#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/articles/index.php",
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
);

?>