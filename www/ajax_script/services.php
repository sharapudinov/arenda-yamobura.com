<?
define("NO_KEEP_STATISTIC", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"detail_list",
	array(
		"COMPONENT_TEMPLATE" => "detail_list",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "5",
		"SECTION_ID" =>  $_REQUEST["section_id"],
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"VIEW_MODE" => "TILE",
		"SHOW_PARENT_NAME" => "Y",
		"HIDE_SECTION_NAME" => "N",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_ARRAY" => $_REQUEST["ajax_array"],
		"GET_SECTION_ID" => $_REQUEST["section_id"],
	),
	false
);?>