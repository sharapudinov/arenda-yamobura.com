<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты");
$APPLICATION->SetTitle("Контакты компании «МСТ»");
$APPLICATION->SetPageProperty("tags", "Контакты");
$APPLICATION->SetPageProperty("keywords", "аренда спецтехники в москве цены, портал аренды спецтехники, аренда спецтехники в подмосковье, аренда спецтехники в москве и области, сайт аренды спецтехники, аренда спецтехники строительной техники, аренда спецтехники экскаватор погрузчик, аренда спецтехники цены, аренда карьерной спецтехники, аренда спецтехники на день в москве");
$APPLICATION->SetPageProperty("description", "Контактные данные компании МСТ. Здесь вы можете узнать всю основную информацию по аренде строительной техники.");
?>
    <div class="wrapper_center">
    <div class="contact">
        <div class="contact_info" itemscope itemtype="http://schema.org/Organization">
            <div class="contact_address contact_info_float">
                <span class="fa icon_map_marker"></span>
                <p class="txt-bold">Адрес:</p>
                <p><? $APPLICATION->IncludeFile(SITE_DIR . "include/contact/address.php", Array(), Array("MODE" => "html", "NAME" => "")); ?></p>
            </div>
            <div class="contact_phone contact_info_float">
                <span class="fa icon_phone"></span>
                <p class="txt-bold">Телефон:</p>
                <p><? $APPLICATION->IncludeFile(SITE_DIR . "include/contact/phone.php", Array(), Array("MODE" => "html", "NAME" => "")); ?></p>
            </div>
            <div class="contact_email contact_info_float">
                <span class="fa icon_email"></span>
                <p class="txt-bold">E-mail:</p>
                <p><? $APPLICATION->IncludeFile(SITE_DIR . "include/contact/email.php", Array(), Array("MODE" => "html", "NAME" => "")); ?></p>
            </div>
            <div class="contact_time contact_info_float">
                <span class="fa icon_time"></span>
                <p class="txt-bold">Режим работы офиса:</p>
                <p><? $APPLICATION->IncludeFile(SITE_DIR . "include/contact/time_office.php", Array(), Array("MODE" => "html", "NAME" => "")); ?></p>
            </div>

            <div class="contact_time contact_info_float">
                <span class="fa icon_time"></span>
                <p class="txt-bold">Прием звонков:</p>
                <p><? $APPLICATION->IncludeFile(SITE_DIR . "include/contact/time.php", Array(), Array("MODE" => "html", "NAME" => "")); ?></p>
            </div>
            <div class="contact_address contact_info_float">
                <span class="fa icon_map_marker"></span>
                <p class="txt-bold">Юр. реквизиты:</p>
                <p><? $APPLICATION->IncludeFile(SITE_DIR . "include/contact/your-adress.php", Array(), Array("MODE" => "html", "NAME" => "")); ?></p>
            </div>

        </div>
        <div class="contact_map">
            <p class="big_map">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:map.yandex.view",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "CONTROLS" => array(    // Элементы управления
                            0 => "SCALELINE",
                        ),
                        "INIT_MAP_TYPE" => "MAP",    // Стартовый тип карты
                        "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.67686575678788;s:10:\"yandex_lon\";d:37.50702988280376;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.509364507934;s:3:\"LAT\";d:55.677489184253;s:4:\"TEXT\";s:81:\"Компания «МСТ» - Аренда спецтехники в Москве\";}}}",    // Данные, выводимые на карте
                        "MAP_HEIGHT" => "450",    // Высота карты
                        "MAP_ID" => "",    // Идентификатор карты
                        "MAP_WIDTH" => "650",    // Ширина карты
                        "OPTIONS" => array(    // Настройки
                            0 => "ENABLE_DRAGGING",
                        )
                    )
                ); ?>
            </p>
            <p class="small_map">
                <!-- Место для карты в мобильной версии -->

            </p>
        </div>
        <div class="clear">
        </div>
        <div class="contact_form">
            <div class="form_title">
                <p>
                    Обратный звонок
                </p>
                Представьтесь, мы вам перезвоним.
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.feedback",
                "contact_email",
                array(
                    "COMPONENT_TEMPLATE" => "contact_email",
                    "EMAIL_TO" => "sharapudinov@mail.ru",    // E-mail, на который будет отправлено письмо
                    "EVENT_MESSAGE_ID" => array(    // Почтовые шаблоны для отправки письма
                        0 => "7",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",    // Сообщение, выводимое пользователю после отправки
                    "REQUIRED_FIELDS" => "",    // Обязательные поля для заполнения
                    "USE_CAPTCHA" => "N",    // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
                )
            ); ?>
        </div>
    </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>