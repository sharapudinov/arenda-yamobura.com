<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
		</div>
		<div class="hFooter"></div>
	</div>
	<footer>
		<div class="footer_center">
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_footer", 
	array(
		"ROOT_MENU_TYPE" => "bottom",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "4",
		"CHILD_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "menu_footer",
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
					<div class="quantom"><a href="http://seocontext.su/" title="<?=GetMessage("CREATE_SITE");?>"><?=GetMessage("CREATE_SITE");?></a> <a href="http://seocontext.su/" title="<?=GetMessage("SAMOVAR");?>"><?=GetMessage("SAMOVAR");?></a></div>
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

					<noindex>
						<p class="footer_telephone_request">
							<a href="#" rel="nofollow" title="Закзать обратный звонок с Arenda-Yamobura.com"><?=GetMessage("ADD_PHONE");?></a>
						</p> <span>|</span>
						<p class="footer_telephone_application">
							<a href="#" rel="nofollow" title="Оставить заявку на Arenda-Yamobura.com"><?=GetMessage("ADD_APL");?></a>
						</p>
					</noindex>

				</div>
				<noindex>
					<div class="footer_social">
						<a href="#" class="social_block" rel="nofollow" title="Группа компании «МСТ» в Facebook">
							<img class="social_facebook" src="<?=SITE_TEMPLATE_PATH;?>/css/themes/images/facebook_icon.png" alt="facebook" />
						</a>
						<a href="#" class="social_block" rel="nofollow" title="Группа компании «МСТ» в Twitter">
							<img class="social_twiter" src="<?=SITE_TEMPLATE_PATH;?>/css/themes/images/twiter_icon.png" alt="twiter" />
						</a>
						<a href="#" class="social_block" rel="nofollow" title="Группа компании «МСТ» в Контакте">
							<img class="social_vk" src="<?=SITE_TEMPLATE_PATH;?>/css/themes/images/vk_icon.png" alt="vk" />
						</a>
					</div>
				</noindex>
			</div>
		</div>
	</footer>
	<a href="#" class="top_map"></a>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter35589190 = new Ya.Metrika({
					id:35589190,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true,
					trackHash:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/35589190" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google counter -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-73212558-2', 'auto');
	ga('send', 'pageview');
	ga('set', 'userId', {{USER_ID}}); // Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).

</script>
<!-- Google counter -->

</body>
</html>