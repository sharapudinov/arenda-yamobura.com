<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
		</div>
		<div class="hFooter"></div>
	</div>
	<footer>
		<div class="footer_center">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_footer", Array(
				"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
					"MENU_CACHE_TYPE" => "A",	// Тип кеширования
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
					"MAX_LEVEL" => "4",	// Уровень вложенности меню
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"COMPONENT_TEMPLATE" => ".default",
					"MENU_THEME" => "site"
				),
				false
			);?>
			<div class="footer_information">
				<div class="footer_copyright">
					<div>
					<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/url.php", Array(), Array("MODE" => "html","NAME" => ""));?>
					</div>
					<div>
					<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/copyright.php", Array(), Array("MODE" => "html","NAME" => ""));?>
					</div>
					<div class="quantom"><?=GetMessage("CREATE_SITE");?><a href="http://samovar-web.ru/"><?=GetMessage("SAMOVAR");?></a></div>
				</div>
				<div class="footer_guide">
					<div class="footer_address">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/address.php", Array(), Array("MODE" => "html","NAME" => ""));?>
					</div>
					<br/>
					<div class="footer_email">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/email.php", Array(), Array("MODE" => "html","NAME" => ""));?>
					</div>
				</div>
				<div class="footer_clear"></div>
				<div class="footer_telephone">
					<div class="footer_phone">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/phone.php", Array(), Array("MODE" => "html","NAME" => ""));?>
					</div>
					<p class="footer_telephone_request"><a href="#"><?=GetMessage("ADD_PHONE");?></a></p> <span>|</span> <p class="footer_telephone_application"><a href="#"><?=GetMessage("ADD_APL");?></a></p>
				</div>
				<div class="footer_social">
					<a href="#" class="social_block">
						<img class="social_facebook" src="<?=SITE_TEMPLATE_PATH;?>/css/themes/images/facebook_icon.png" alt="facebook" />
					</a>
					<a href="#" class="social_block">
						<img class="social_twiter" src="<?=SITE_TEMPLATE_PATH;?>/css/themes/images/twiter_icon.png" alt="twiter" />
					</a>
					<a href="#" class="social_block">
						<img class="social_vk" src="<?=SITE_TEMPLATE_PATH;?>/css/themes/images/vk_icon.png" alt="vk" />
					</a>
				</div>
			</div>
		</div>
	</footer>
	<a href="#" class="top_map"></a>
</body>
</html>