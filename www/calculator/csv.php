<?
define("NO_KEEP_STATISTIC", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?
//конвертирование в нормальную кодировку
	function toWindow($ii){
		return iconv( "utf-8", "windows-1251",$ii);
	}
CModule::IncludeModule("iblock");
foreach($_REQUEST["price"] as $key=> $arPrice)
{
	if($arPrice>0)
	{
		$arResult["ELEMENTS_LIST"][] = $key;
	}
}
$list[0] = array(toWindow('№'),toWindow('Название услуги'),toWindow('ед. измерения'),toWindow('Цена'),toWindow('Количество'),toWindow('Итого'));
$projects_element = CIBlockElement::GetList(array(), array("IBLOCK_ID" => "3","ID"=>$arResult["ELEMENTS_LIST"]), false, false,array("ID","NAME","PROPERTY_PRICE", "PROPERTY_SYMBOL"));
$allPrice=0;
while($arElement = $projects_element -> GetNext(false,false))
{
	$totalPrice = $_REQUEST["price"][$arElement["ID"]]*$arElement["PROPERTY_PRICE_VALUE"];
	$allPrice+=$totalPrice;
	$list[] = array(toWindow($arElement["NAME"]), toWindow($arElement["PROPERTY_SYMBOL_VALUE"]), toWindow($arElement["PROPERTY_PRICE_VALUE"]." Р"), toWindow($_REQUEST["price"][$arElement["ID"]]), $totalPrice." Р");
}
foreach($list as $key2 => $v)
{
	if($key2>0)
	{
		$str .= $key2.';'.$v[0].';'.$v[1].';'.$v[2].';'.$v[3].';'.$v[4].";\r\n";
	}
	else
	{
		$str .= ';'.$v[1].';'.$v[2].';'.$v[3].';'.$v[4].';'.$v[5].";\r\n";
	}
}
$str .= ';;;;'.toWindow("Итого").':;'.$allPrice." P;\r\n";
file_put_contents('calculator.csv', $str);

LocalRedirect("calculator.csv");
?>