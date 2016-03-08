<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Калькулятор стоимости аренды спецтехники ");
$APPLICATION->SetTitle("Калькулятор стоимости аренды спецтехники ");
$APPLICATION->SetPageProperty("tags", "Калькулятор");
$APPLICATION->SetPageProperty("keywords", "бурение тисэ, забор на винтовых сваях цена с монтажом, установка винтовых свай цена, бурение свай тисэ, бурение под столбы забора цена, услуги ямобура в москве, монтаж винтовых свай цена, бурение отверстий под сваи фундамента цена");
$APPLICATION->SetPageProperty("description", "Рассчитайте сами стоимость цены на услуги ямобура. Заказ и аренда спецтехники в Москве и Московской области по низким ценам.");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"calculator", 
	array(
		"COMPONENT_TEMPLATE" => "calculator",
		"IBLOCK_TYPE" => "price",
		"IBLOCK_ID" => "3",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"VIEW_MODE" => "LINE",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>