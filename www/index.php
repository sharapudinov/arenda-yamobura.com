<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Аренда спецтехники в Москве • Компания «МСТ»");
$APPLICATION->SetTitle("Ваш сайт");
$APPLICATION->SetPageProperty("tags", "Главная");
$APPLICATION->SetPageProperty("keywords", "Ключевые, слова, вашего, сайта");
$APPLICATION->SetPageProperty("description", "Описание вашего сайта");
?>
</div>
<div class="pros">
	<div class="pros_center">
		<div class="pros_element">
			<div>
				<div class="froze_icon"></div>
				<div>
				<?$APPLICATION->IncludeFile(SITE_DIR."include/index/froze.php", Array(), Array("MODE" => "html","NAME" => ""));?>
				</div>
			</div>
		</div>
		<div class="pros_element">
			<div>
				<div class="experience_icon"></div>
				<div>
				<?$APPLICATION->IncludeFile(SITE_DIR."include/index/experience.php", Array(), Array("MODE" => "html","NAME" => ""));?>
				</div>
			</div>
		</div>
		<div class="pros_element">
			<div>
				<div class="protection_icon"></div>
				<div>
				<?$APPLICATION->IncludeFile(SITE_DIR."include/index/protection.php", Array(), Array("MODE" => "html","NAME" => ""));?>
				</div>
			</div>
		</div>
		<div class="pros_element">
			<div>
				<div class="time_icon"></div>
				<div>
				<?$APPLICATION->IncludeFile(SITE_DIR."include/index/time.php", Array(), Array("MODE" => "html","NAME" => ""));?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrapper_center">
<div class="services">
	<div class="services_center">
		<?$APPLICATION->IncludeComponent("bitrix:catalog", "services", Array(
			"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
			"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
			"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
			"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
			"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
			"AJAX_MODE" => "N",	// Включить режим AJAX
			"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
			"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
			"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
			"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			"CACHE_TYPE" => "A",	// Тип кеширования
			"COMPONENT_TEMPLATE" => ".default",
			"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
			"DETAIL_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
			"DETAIL_BRAND_USE" => "N",	// Использовать компонент "Бренды"
			"DETAIL_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
			"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
			"DETAIL_DETAIL_PICTURE_MODE" => "IMG",	// Режим показа детальной картинки
			"DETAIL_DISPLAY_NAME" => "Y",	// Выводить название элемента
			"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса на детальной странице
			"DETAIL_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
			"DETAIL_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
			"DETAIL_PROPERTY_CODE" => array(	// Свойства
				0 => "",
				1 => "",
			),
			"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
			"DETAIL_USE_COMMENTS" => "N",	// Включить отзывы о товаре
			"DETAIL_USE_VOTE_RATING" => "N",	// Включить рейтинг товара
			"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
			"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
			"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
			"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
			"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
			"FILTER_VIEW_MODE" => "VERTICAL",	// Вид отображения умного фильтра
			"IBLOCK_ID" => "5",	// Инфоблок
			"IBLOCK_TYPE" => "services",	// Тип инфоблока
			"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
			"LABEL_PROP" => "-",	// Свойство меток товара
			"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
			"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
			"LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
			"LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
			"LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
			"LIST_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства раздела
			"LIST_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства раздела
			"LIST_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства раздела
			"LIST_PROPERTY_CODE" => array(	// Свойства
				0 => "",
				1 => "",
			),
			"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
			"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
			"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
			"MESS_BTN_COMPARE" => "Сравнение",	// Текст кнопки "Сравнение"
			"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
			"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
			"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
			"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"PAGER_TITLE" => "Товары",	// Название категорий
			"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
			"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
			"PRICE_CODE" => "",	// Тип цены
			"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
			"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
			"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
			"PRODUCT_PROPERTIES" => "",	// Характеристики товара, добавляемые в корзину
			"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
			"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
			"SECTIONS_HIDE_SECTION_NAME" => "N",	// Не показывать названия подразделов
			"SECTIONS_SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
			"SECTIONS_VIEW_MODE" => "TILE",	// Вид списка подразделов
			"SECTION_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
			"SECTION_COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
			"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
			"SECTION_TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
			"SEF_FOLDER" => "/services/",	// Каталог ЧПУ (относительно корня сайта)
			"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
			"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
			"SET_STATUS_404" => "N",	// Устанавливать статус 404
			"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
			"SHOW_404" => "N",	// Показ специальной страницы
			"SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
			"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
			"SHOW_TOP_ELEMENTS" => "Y",	// Выводить топ элементов
			"SIDEBAR_DETAIL_SHOW" => "Y",	// Показывать правый блок на детальной странице
			"SIDEBAR_PATH" => "",	// Путь к включаемой области для вывода информации в правом блоке
			"SIDEBAR_SECTION_SHOW" => "Y",	// Показывать правый блок в списке товаров
			"TEMPLATE_THEME" => "blue",	// Цветовая тема
			"TOP_ELEMENT_COUNT" => "9",	// Количество выводимых элементов
			"TOP_ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
			"TOP_ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
			"TOP_ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
			"TOP_ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
			"TOP_LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
			"TOP_PROPERTY_CODE" => array(	// Свойства
				0 => "",
				1 => "",
			),
			"TOP_VIEW_MODE" => "SECTION",	// Показ элементов top'а
			"USE_COMPARE" => "N",	// Разрешить сравнение товаров
			"USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
			"USE_FILTER" => "N",	// Показывать фильтр
			"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
			"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
			"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
			"USE_STORE" => "N",	// Показывать блок "Количество товара на складе"
			"SEF_URL_TEMPLATES" => array(
				"sections" => "",
				"section" => "#SECTION_CODE#/",
				"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
				"compare" => "compare.php?action=#ACTION_CODE#",
				"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
			),
			"VARIABLE_ALIASES" => array(
				"compare" => array(
					"ACTION_CODE" => "action",
				),
			)
		),
			false
		);?>

	</div>
</div>
</div>
<div class="about_company">
	<div class="about_company_center">
			<h1>
				<?$APPLICATION->IncludeFile(SITE_DIR."include/index/about_company.php", Array(), Array("MODE" => "html","NAME" => ""));?>
			</h1>
			<div>
				<?$APPLICATION->IncludeFile(SITE_DIR."include/index/about_company_text.php", Array(), Array("MODE" => "html","NAME" => ""));?>
			</div>
			<div class="about_company_img"></div>
	</div>
</div>
<div class="wrapper_center">
<div class="last_work">
	<div class="last_work_center">
		<h2>
		<?$APPLICATION->IncludeFile(SITE_DIR."include/index/last_work.php", Array(), Array("MODE" => "html","NAME" => ""));?>
		</h2>
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"last_work", 
	array(
		"COMPONENT_TEMPLATE" => "last_work",
		"IBLOCK_TYPE" => "portfolio",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Последние работы",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
	</div>
</div>
<div class="line_index"></div>
<div class="customer_reviews">
	<div class="customer_reviews_center">
		<h2>
		<?$APPLICATION->IncludeFile(SITE_DIR."include/index/customer_reviews.php", Array(), Array("MODE" => "html","NAME" => ""));?>
		</h2>
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews_list", 
	array(
		"COMPONENT_TEMPLATE" => "reviews_list",
		"IBLOCK_TYPE" => "reviews",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "0",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Последние работы",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>