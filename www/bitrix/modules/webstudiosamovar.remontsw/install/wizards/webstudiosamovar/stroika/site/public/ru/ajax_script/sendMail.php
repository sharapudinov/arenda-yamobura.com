<?
define("NO_KEEP_STATISTIC", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?
if(SITE_CHARSET=="windows-1251")
{
	$_REQUEST["name"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["name"]);
	$_REQUEST["message"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["message"]);
	$_REQUEST["phone"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["phone"]);
	$_REQUEST["email_from"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["email_from"]);
}
$arEventFields = array(
	"AUTHOR" => $_REQUEST["name"],
	"AUTHOR_PHONE" => $_REQUEST["phone"],
	"AUTHOR_EMAIL"   => $_REQUEST["email"],
	"TEXT"   => $_REQUEST["message"],
	"EMAIL_TO"   => COption::GetOptionString("main", "email_from"),
);
$arFields = CEvent::Send("FEEDBACK_FORM", "s1", $arEventFields, "N", $_REQUEST["event_message_id"]);
?>