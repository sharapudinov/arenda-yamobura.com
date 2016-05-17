<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Прайс-лист на аренду строительной спецтехники");
$APPLICATION->SetTitle("Прайс-лист на аренду строительной спецтехники");
$APPLICATION->SetPageProperty("tags", "Цена на наши услуги");
$APPLICATION->SetPageProperty("keywords", "аренда колесного экскаватора, аренда экскаватора на колесном ходу, аренда полноповоротного колесного экскаватора, полноповоротный экскаватор колесный аренда, аренда колесного экскаватора в москве, аренда колесного экскаватора с гидромолотом");
$APPLICATION->SetPageProperty("description", "Прайс-лист на аренду строительной спецтехники. Мы предлагаем услуги по аренде ямобура. Низкие цены. Полный перечь услуг на нашем сайте.");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"price",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "price",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "price",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);?>
<div class="price">
	<p>
		Скачать коммерческое предложение от компании «МСТ»: <a href="/price/Коммерческое предложение МСТ.pdf" title="коммерческое предложение аренды спецтехники" target="_blank" rel="nofollow">Коммерческое предложение</a>
	</p>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>