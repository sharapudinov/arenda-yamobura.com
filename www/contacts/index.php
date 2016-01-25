<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("tags", "Контакты");
$APPLICATION->SetPageProperty("keywords", "Ключевые, слова, вашего, сайта");
$APPLICATION->SetPageProperty("description", "Описание вашего сайта");
?>
<div class="wrapper_center">
	<div class="contact">
		<div class="contact_info">
			<div class="contact_address contact_info_float">
				<span class="fa icon_map_marker"></span>
				<p>Адрес:<br/>
				<span><?$APPLICATION->IncludeFile(SITE_DIR."include/contact/address.php", Array(), Array("MODE" => "html","NAME" => ""));?></span>
				</p>
			</div>
			<div class="contact_phone contact_info_float">
				<span class="fa icon_phone"></span>
				<p>Телефон:<br/>
				<span><?$APPLICATION->IncludeFile(SITE_DIR."include/contact/phone.php", Array(), Array("MODE" => "html","NAME" => ""));?></span>
				</p>
			</div>
			<div class="contact_email contact_info_float">
				<span class="fa icon_email"></span>
				<p>E-mail: <br/>
				<span><?$APPLICATION->IncludeFile(SITE_DIR."include/contact/email.php", Array(), Array("MODE" => "html","NAME" => ""));?></span>
				</p>
			</div>
			<div class="contact_time contact_info_float">
				<span class="fa icon_time"></span>
				<p>Режим работы: <br/>
				<span><?$APPLICATION->IncludeFile(SITE_DIR."include/contact/time.php", Array(), Array("MODE" => "html","NAME" => ""));?></span>
				</p>
			</div>
		</div>
		<div class="contact_map">
			<p class="big_map">
			<script  async type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=7uvy9sf4s-DAtxrStv6lVH79_9SznvuY&width=100%&height=450"></script>
			</p>
			<p class="small_map">
			<script class="small_map" async type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=7uvy9sf4s-DAtxrStv6lVH79_9SznvuY&width=100%&height=250"></script>
			</p>
		</div>
		<div class="clear"></div>
		<div class="contact_form">
			<div class="form_title">
				<p>Обратный звонок</p>
				<span>Представьтесь, мы вам перезвоним.</span>
			</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.feedback", 
				"contact_email", 
				array(
					"COMPONENT_TEMPLATE" => "contact_email",
					"USE_CAPTCHA" => "N",
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
					"REQUIRED_FIELDS" => array(
					),
					"EVENT_MESSAGE_ID" => array(
						0 => "7",
					)
				),
				false
			);?>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>