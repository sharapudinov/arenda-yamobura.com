<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//test_dump($arResult['DISPLAY_PROPERTIES']);
$this->setFrameMode(true);
$templateLibrary = array('popup');
$currencyList = '';
if (!empty($arResult['CURRENCIES'])) {
    $templateLibrary[] = 'currency';
    $currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}
$templateData = array(
    'TEMPLATE_THEME' => $this->GetFolder() . '/themes/' . $arParams['TEMPLATE_THEME'] . '/style.css',
    'TEMPLATE_CLASS' => 'bx_' . $arParams['TEMPLATE_THEME'],
    'TEMPLATE_LIBRARY' => $templateLibrary,
    'CURRENCIES' => $currencyList
);
unset($currencyList, $templateLibrary);

$strMainID = $this->GetEditAreaId($arResult['ID']);
$arItemIDs = array(
    'ID' => $strMainID,
    'PICT' => $strMainID . '_pict',
    'DISCOUNT_PICT_ID' => $strMainID . '_dsc_pict',
    'STICKER_ID' => $strMainID . '_sticker',
    'BIG_SLIDER_ID' => $strMainID . '_big_slider',
    'BIG_IMG_CONT_ID' => $strMainID . '_bigimg_cont',
    'SLIDER_CONT_ID' => $strMainID . '_slider_cont',
    'SLIDER_LIST' => $strMainID . '_slider_list',
    'SLIDER_LEFT' => $strMainID . '_slider_left',
    'SLIDER_RIGHT' => $strMainID . '_slider_right',
    'OLD_PRICE' => $strMainID . '_old_price',
    'PRICE' => $strMainID . '_price',
    'DISCOUNT_PRICE' => $strMainID . '_price_discount',
    'SLIDER_CONT_OF_ID' => $strMainID . '_slider_cont_',
    'SLIDER_LIST_OF_ID' => $strMainID . '_slider_list_',
    'SLIDER_LEFT_OF_ID' => $strMainID . '_slider_left_',
    'SLIDER_RIGHT_OF_ID' => $strMainID . '_slider_right_',
    'QUANTITY' => $strMainID . '_quantity',
    'QUANTITY_DOWN' => $strMainID . '_quant_down',
    'QUANTITY_UP' => $strMainID . '_quant_up',
    'QUANTITY_MEASURE' => $strMainID . '_quant_measure',
    'QUANTITY_LIMIT' => $strMainID . '_quant_limit',
    'BASIS_PRICE' => $strMainID . '_basis_price',
    'BUY_LINK' => $strMainID . '_buy_link',
    'ADD_BASKET_LINK' => $strMainID . '_add_basket_link',
    'BASKET_ACTIONS' => $strMainID . '_basket_actions',
    'NOT_AVAILABLE_MESS' => $strMainID . '_not_avail',
    'COMPARE_LINK' => $strMainID . '_compare_link',
    'PROP' => $strMainID . '_prop_',
    'PROP_DIV' => $strMainID . '_skudiv',
    'DISPLAY_PROP_DIV' => $strMainID . '_sku_prop',
    'OFFER_GROUP' => $strMainID . '_set_group_',
    'BASKET_PROP_DIV' => $strMainID . '_basket_prop',
);
?>
<? //s($arResult); ?>

<div class="projects_top">
    <?
    $img = $arResult["DETAIL_PICTURE"];
    $img = CFile::ResizeImageGet(
        $img,
        array("width" => "600", "height" => "400"),
        BX_RESIZE_IMAGE_PROPORTIONAL,
        false, $arFilters = Array()
    ); ?>
    <img src="<?= $img["src"]; ?>" title="<?= $arResult['NAME']; ?>" alt="<?= $arResult['NAME']; ?>"/>
    <div class="projects_info">
        <p class="projects_info_title"><?= GetMessage("KR_OP"); ?></p>

        <? if ($arResult['PROPERTIES']['MAXIMUM_DRILLING_DEPTH']['VALUE']): ?>
            <p><?=$arResult['PROPERTIES']['MAXIMUM_DRILLING_DEPTH']['NAME']; ?> <span><?=$arResult['PROPERTIES']['MAXIMUM_DRILLING_DEPTH']['VALUE'] ?></span></p>
        <? endif; ?>
        <? if ($arResult['PROPERTIES']['BUCKET_CAPACITY']['VALUE']): ?>
            <p><?=$arResult['PROPERTIES']['BUCKET_CAPACITY']['NAME']; ?> <span><?=$arResult['PROPERTIES']['BUCKET_CAPACITY']['VALUE'] ?></span></p>
        <? endif; ?>
        <? if ($arResult['PROPERTIES']['MAXIMUM_DIGGING_DEPTH']['VALUE']): ?>
            <p><?=$arResult['PROPERTIES']['MAXIMUM_DIGGING_DEPTH']['NAME']; ?> <span><?=$arResult['PROPERTIES']['MAXIMUM_DIGGING_DEPTH']['VALUE'] ?></span></p>
        <? endif; ?>
        <? if ($arResult['PROPERTIES']['MINIMUM_DIAMETER']['VALUE']): ?>
            <p><?=$arResult['PROPERTIES']['MINIMUM_DIAMETER']['NAME']; ?> <span><?=$arResult['PROPERTIES']['MINIMUM_DIAMETER']['VALUE'] ?></span></p>
        <? endif; ?>
        <? if ($arResult['PROPERTIES']['MAXIMUM_DIAMETER']['VALUE']): ?>
            <p><?=$arResult['PROPERTIES']['MAXIMUM_DIAMETER']['NAME']; ?> <span><?=$arResult['PROPERTIES']['MAXIMUM_DIAMETER']['VALUE'] ?></span></p>
        <? endif; ?>
        <? if ($arResult['PROPERTIES']['PRICE_HOUR']['VALUE']): ?>
            <p><?=$arResult['PROPERTIES']['PRICE_HOUR']['NAME']; ?> <span><?=$arResult['PROPERTIES']['PRICE_HOUR']['VALUE'] ?></span></p>
        <? endif; ?>
        <? if ($arResult['PROPERTIES']['PRICE_CHANGE']['VALUE']): ?>
            <p><?=$arResult['PROPERTIES']['PRICE_CHANGE']['NAME']; ?> <span><?=$arResult['PROPERTIES']['PRICE_CHANGE']['VALUE'] ?></span></p>
        <? endif; ?>

        <span><input type="button" id="services-button" value="Оформить заказ" onclick="yaCounter35589190.reachGoal('forma_services');"/></span>
    </div>
</div>

<? if (!empty($arResult['PROPERTIES']["GALLERY"]["VALUE"])): ?>
    <h2><?= GetMessage("FOTO_PROJECT"); ?></h2>
    <div class="projects_photo">
        <?
        $projects_img = CIBlockElement::GetList(Array(), array("ID" => $arResult['ID']), false, array(), array("PROPERTY_GALLERY"));
        while ($img = $projects_img->GetNext(false, false)) {
            $img = CFile::GetFileArray($img["PROPERTY_GALLERY_VALUE"]);
            ?>
            <a href="<?= $img["SRC"] ?>" rel="catalog_img" class="animation_img">
                <span class="overlay"></span>
                <img src="<?= $img["SRC"] ?>" title="<?= $arResult['NAME']; ?>" alt="<?= $arResult['NAME']; ?>"/>
                <span class="link"><i class="fa fa-check"></i></span>
            </a>
        <? } ?>
    </div>
<? endif; ?>

<noindex>
    <h2><?= GetMessage("ARENDA_DETAIL"); ?></h2>
    <div class="projects_detail_text">
        <?= $arResult['PREVIEW_TEXT']; ?>
    </div>
</noindex>

<h2><?= GetMessage("TEHNIKA_DETAIL"); ?></h2>
<div class="projects_interesting">
    <?
    $projects_interesting = CIBlockElement::GetList(Array("rand" => "DESC"), array("IBLOCK_ID" => 7, "SECTION_ID" => $arResult['PROPERTIES']['SPECIAL_SERVICES']['VALUE'], "ACTIVE" => "Y"), false, array("nTopCount" => "4"),
        array("PREVIEW_PICTURE", "NAME", "DETAIL_PAGE_URL"));
    while ($interesting = $projects_interesting->GetNext(false, false)) {
        $img = CFile::GetFileArray($interesting["PREVIEW_PICTURE"]);
        $img = CFile::ResizeImageGet(
            $img,
            array("width" => "400", "height" => "150"),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            false, $arFilters = Array()
        );
        ?>
        <div class="projects_interesting_element">
            <a href="<?= $interesting['DETAIL_PAGE_URL']; ?>" class="animation_img">
                <span class="overlay"></span>
                <img src="<?= $img["src"] ?>" title="<?= $interesting['NAME']; ?>" alt="<?= $interesting['NAME']; ?>"/>
                <span class="link"><i class="fa fa-check"></i></span>
            </a>
            <p><a href="<?= $interesting['DETAIL_PAGE_URL']; ?>"><?= $interesting['NAME']; ?></a></p>

        </div>
    <? } ?>
</div>
<div style="clear: both"></div>

<h2><?= GetMessage("OP"); ?></h2>
<div class="projects_detail_text">
    <?= $arResult['DETAIL_TEXT']; ?>
</div>

<h2><?= GetMessage("INTERES"); ?></h2>
<div class="projects_interesting">
    <?
    $projects_interesting = CIBlockElement::GetList(Array("rand" => "DESC"), array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y"), false, array("nTopCount" => "4"),
        array("PREVIEW_PICTURE", "NAME", "DETAIL_PAGE_URL"));
    while ($interesting = $projects_interesting->GetNext(false, false)) {
        $img = CFile::GetFileArray($interesting["PREVIEW_PICTURE"]);
        $img = CFile::ResizeImageGet(
            $img,
            array("width" => "400", "height" => "150"),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            false, $arFilters = Array()
        );
        ?>
        <div class="projects_interesting_element">
            <a href="<?= $interesting['DETAIL_PAGE_URL']; ?>" class="animation_img">
                <span class="overlay"></span>
                <img src="<?= $img["src"] ?>" title="<?= $interesting['NAME']; ?>" alt="<?= $interesting['NAME']; ?>"/>
                <span class="link"><i class="fa fa-link"></i></span>
            </a>
            <p><a href="<?= $interesting['DETAIL_PAGE_URL']; ?>"><?= $interesting['NAME']; ?></a></p>
        </div>
    <? } ?>
</div>