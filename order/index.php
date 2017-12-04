<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");
?>

<?$APPLICATION->IncludeComponent("bitrix:sale.order.ajax", "order", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADDITIONAL_PICT_PROP_11" => "-",	// Дополнительная картинка [Основной каталог товаров]
		"ADDITIONAL_PICT_PROP_12" => "-",	// Дополнительная картинка [Пакет предложений (Основной каталог товаров)]
		"ADDITIONAL_PICT_PROP_15" => "-",	// Дополнительная картинка [Stenova Обои]
		"ADDITIONAL_PICT_PROP_16" => "-",	// Дополнительная картинка [Торговые предложения (Stenova обои)]
		"ALLOW_APPEND_ORDER" => "Y",	// Разрешить оформлять заказ на существующего пользователя
		"ALLOW_AUTO_REGISTER" => "N",	// Оформлять заказ с автоматической регистрацией пользователя
		"ALLOW_NEW_PROFILE" => "N",	// Разрешить множество профилей покупателей
		"ALLOW_USER_PROFILES" => "N",	// Разрешить использование профилей покупателей
		"BASKET_IMAGES_SCALING" => "adaptive",	// Режим отображения изображений товаров
		"BASKET_POSITION" => "after",	// Расположение списка товаров
		"COMPATIBLE_MODE" => "Y",	// Режим совместимости для предыдущего шаблона
		"DELIVERIES_PER_PAGE" => "9",	// Количество доставок на странице
		"DELIVERY_FADE_EXTRA_SERVICES" => "N",	// Дополнительные услуги, которые будут показаны в пройденном (свернутом) блоке
		"DELIVERY_NO_AJAX" => "N",	// Когда расчитывать доставки с внешними системами расчета
		"DELIVERY_NO_SESSION" => "Y",	// Проверять сессию при оформлении заказа
		"DELIVERY_TO_PAYSYSTEM" => "d2p",	// Последовательность оформления
		"DISABLE_BASKET_REDIRECT" => "N",	// Оставаться на странице оформления заказа, если список товаров пуст
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",	// Разрешить оплату с внутреннего счета только в полном объеме
		"PATH_TO_AUTH" => "/auth/",	// Путь к странице авторизации
		"PATH_TO_BASKET" => "basket.php",	// Путь к странице корзины
		"PATH_TO_PAYMENT" => "payment.php",	// Страница подключения платежной системы
		"PATH_TO_PERSONAL" => "index.php",	// Путь к странице персонального раздела
		"PAY_FROM_ACCOUNT" => "N",	// Разрешить оплату с внутреннего счета
		"PAY_SYSTEMS_PER_PAGE" => "9",	// Количество платежных систем на странице
		"PICKUPS_PER_PAGE" => "5",	// Количество пунктов самовывоза на странице
		"PRODUCT_COLUMNS_HIDDEN" => "",	// Свойства товаров отображаемые в свернутом виде в списке товаров
		"PRODUCT_COLUMNS_VISIBLE" => array(	// Выбранные колонки таблицы списка товаров
			0 => "PREVIEW_PICTURE",
			1 => "PROPS",
		),
		"SEND_NEW_USER_NOTIFY" => "Y",	// Отправлять пользователю письмо, что он зарегистрирован на сайте
		"SERVICES_IMAGES_SCALING" => "adaptive",	// Режим отображения вспомагательных изображений
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_BASKET_HEADERS" => "N",	// Показывать заголовки колонок списка товаров
		"SHOW_COUPONS_BASKET" => "Y",	// Показывать поле ввода купонов в блоке списка товаров
		"SHOW_COUPONS_DELIVERY" => "Y",	// Показывать поле ввода купонов в блоке доставки
		"SHOW_COUPONS_PAY_SYSTEM" => "Y",	// Показывать поле ввода купонов в блоке оплаты
		"SHOW_DELIVERY_INFO_NAME" => "Y",	// Отображать название в блоке информации по доставке
		"SHOW_DELIVERY_LIST_NAMES" => "Y",	// Отображать названия в списке доставок
		"SHOW_DELIVERY_PARENT_NAMES" => "Y",	// Показывать название родительской доставки
		"SHOW_MAP_IN_PROPS" => "N",	// Показывать карту в блоке свойств заказа
		"SHOW_NEAREST_PICKUP" => "N",	// Показывать ближайшие пункты самовывоза
		"SHOW_NOT_CALCULATED_DELIVERIES" => "L",	// Отображение доставок с ошибками расчета
		"SHOW_ORDER_BUTTON" => "final_step",	// Отображать кнопку оформления заказа (для неавторизованных пользователей)
		"SHOW_PAY_SYSTEM_INFO_NAME" => "Y",	// Отображать название в блоке информации по платежной системе
		"SHOW_PAY_SYSTEM_LIST_NAMES" => "Y",	// Отображать названия в списке платежных систем
		"SHOW_PICKUP_MAP" => "Y",	// Показывать карту для доставок с самовывозом
		"SHOW_STORES_IMAGES" => "Y",	// Показывать изображения складов в окне выбора пункта выдачи
		"SHOW_TOTAL_ORDER_BUTTON" => "N",	// Отображать дополнительную кнопку оформления заказа
		"SHOW_VAT_PRICE" => "Y",	// Отображать значение НДС
		"SKIP_USELESS_BLOCK" => "Y",	// Пропускать шаги, в которых один элемент для выбора
		"TEMPLATE_LOCATION" => "popup",	// Визуальный вид контрола выбора местоположений
		"TEMPLATE_THEME" => "site",	// Цветовая тема
		"USER_CONSENT" => "N",	// Запрашивать согласие
		"USER_CONSENT_ID" => "0",	// Соглашение
		"USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
		"USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
		"USE_CUSTOM_ADDITIONAL_MESSAGES" => "N",	// Заменить стандартные фразы на свои
		"USE_CUSTOM_ERROR_MESSAGES" => "N",	// Заменить стандартные фразы на свои
		"USE_CUSTOM_MAIN_MESSAGES" => "N",	// Заменить стандартные фразы на свои
		"USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
		"USE_PRELOAD" => "Y",	// Автозаполнение оплаты и доставки по предыдущему заказу
		"USE_PREPAYMENT" => "N",	// Использовать предавторизацию для оформления заказа (PayPal Express Checkout)
		"USE_YM_GOALS" => "N",	// Использовать цели счетчика Яндекс.Метрики
	),
	false
);?>


    <div class="wrap-lg checkPage">
        <h1 class="checkPage__title single-title">Оформление заказа — № 35695</h1>
        <div class="checkPage__stepsCont">
            <div class="checkPage__stepsCont__step-1">
                <div class="stapItemTitle"><b>Шаг <i>1:</i></b> Контакная информация</div>
                <!--многие формы и классы с форм повторяються везде-->
                <form action="">
                    <div class="tabs__content active" >
                        <div class="tabs__content__formWrap" >
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">Фамилия</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">Имя</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">Номер телефона</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input class="telMask" type="text">
                                </div>
                            </div>
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">E-mail адрес</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="profile__tabs__item requireTextBlock">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">Местоположение</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                    <p>Все поля обязательные для заполнения</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabsSubmitButtonClearfix">
                        <input type="submit" value="Продолжить">
                    </div>
                </form>
            </div>
            <!--step 2 :(-->
            <div class="stapItemTitle"><b>Шаг <i>2:</i></b> Доставка</div>
            <form action="" class="">
                <div class="checkPage__step-2 tabs__content active">
                    <div class="tabs__content__formWrap" >
                        <div class="profile__tabs__item profile__tabs__item--radioBlock">
                            <div class="profile__tabs__item__leftLabel"></div>
                            <div class="profile__tabs__item__rightContent">
                                <span>Способы доставки</span>
                                <div class="profile__tabs__item__labelBlock">
                                    <input id="radio-1" name="nameRadio" type="radio">
                                    <label for="radio-1">Самовывоз из пункта доставки</label>
                                    <input id="radio-2" name="nameRadio" type="radio">
                                    <label for="radio-2">Курьерская доставка</label>
                                </div>
                            </div>
                        </div>
                        <span class="checkPage__step-2__title">Адрес доставки</span>
                        <div class="profile__tabs__item">
                            <div class="profile__tabs__item__leftLabel">
                                <label for="">Город</label>
                            </div>
                            <div class="profile__tabs__item__rightContent">
                                <input type="text">
                            </div>
                        </div>
                        <div class="profile__tabs__item">
                            <div class="profile__tabs__item__leftLabel">
                                <label for="">Улица</label>
                            </div>
                            <div class="profile__tabs__item__rightContent">
                                <input type="text">
                            </div>
                        </div>
                        <div class="checkPage__step-2__contsHalfPast">
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">Номер дома</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                    <div class="profile__tabs__item__leftLabel">
                                        <label for="">Корпус, строение </label>
                                    </div>
                                    <div class="profile__tabs__item__rightContent">
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile__tabs__item">
                            <div class="profile__tabs__item__leftLabel">
                                <label for="">Номер квартиры</label>
                            </div>
                            <div class="profile__tabs__item__rightContent">
                                <input type="text">
                            </div>
                        </div>
                        <div class="profile__tabs__item">
                            <div class="profile__tabs__item__leftLabel">
                                <label for="">Почтовый индекс</label>
                            </div>
                            <div class="profile__tabs__item__rightContent">
                                <input type="text">
                            </div>
                        </div>
                        <div class="profile__tabs__item requireTextBlock">
                            <div class="profile__tabs__item__leftLabel"></div>
                            <div class="profile__tabs__item__rightContent">
                                <p>Все поля обязательные для заполнения</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabsSubmitButtonClearfix checkPage__step-2_button">
                    <input type="submit" value="сохранить">
                </div>
            </form>
            <!--step 3 :(-->
            <div class="stapItemTitle"><b>Шаг <i>3:</i></b> Способы оплаты</div>
            <form class="checkPage__step-3 tabs__content active">
                <div class="profile__tabs__item profile__tabs__item--radioBlock">
                    <div class="profile__tabs__item__leftLabel"></div>
                    <div class="profile__tabs__item__rightContent">
                        <div class="profile__tabs__item__labelBlock">
                            <input checked id="radio-11" name="nameRadio" type="radio">
                            <label for="radio-11">100% предоплата по карте Вашего банка</label>
                            <input id="radio-12" name="nameRadio" type="radio">
                            <label for="radio-12">Платежным поручением (для юридических лиц)</label>
                        </div>
                    </div>
                </div>
                <div class="tabsSubmitButtonClearfix">
                    <input type="submit" value="сохранить">
                </div>
            </form>
            <!-- step 4 :((((  все с козины-->
            <div class="stapItemTitle"><b>Шаг <i>4: </i></b>Ваша корзина</div>
            <div class="checkPage__step-4 tabs__content active">
                <div class=" cartPage__desctop">
                    <div class="cartPage__desctop__th">
                        <div class="cartPage__desctop__th__name">Товар</div>
                        <div class="cartPage__desctop__th__price">Цена за шт.</div>
                        <div class="cartPage__desctop__th__count">Количество</div>
                        <div class="cartPage__desctop__th__summ">Сумма</div>
                    </div><!--first product-->
                    <form class="cartPage__desctop__td">
                        <div class="cartPage__desctop__td__img">
                            <img src="/img/small-pages/card-img-1.jpg" alt="">
                        </div>
                        <div class="cartPage__desctop__td__name">
                            <p>Артикул: 987-666</p>
                            <span>Коллекция Wine<br> Размер: 1,06 x 10,5 м.</span>
                        </div>
                        <div class="cartPage__desctop__td__price">
                            <p>1 800.00 руб.</p>
                        </div>
                        <div class="cartPage__desctop__td__count">
                            <input type="number" value="3">
                        </div>
                        <div class="cartPage__desctop__td__summ">
                            <b>5 400.00 руб.</b>
                        </div>
                    </form><!--second product-->
                    <form class="cartPage__desctop__td">
                        <div class="cartPage__desctop__td__img">
                            <img src="/img/small-pages/card-img-2.jpg" alt="">
                        </div>
                        <div class="cartPage__desctop__td__name">
                            <p>Артикул: 987-666</p>
                            <span>Коллекция Wine <br>Размер: 1,06 x 10,5 м.</span>
                        </div>
                        <div class="cartPage__desctop__td__price">
                            <p>1 800.00 руб.</p>
                        </div>
                        <div class="cartPage__desctop__td__count">
                            <input type="number" value="3">
                        </div>
                        <div class="cartPage__desctop__td__summ">
                            <b>5 400.00 руб.</b>
                        </div>
                    </form>
                </div><!--end desctop html -->
                <!--mobile html -->
                <div class="cartPage__mobile">
                    <form class="cartPage__desctop__td">
                        <div class="cartPage__desctop__td__img">
                            <img src="/img/small-pages/card-img-2.jpg" alt="">
                        </div>
                        <div class="cartPage__desctop__td__name">
                            <p>Артикул: 987-666</p>
                            <span>Коллекция Wine</span>
                        </div>
                        <div class="cartPage__desctop__td__count">
                            <span class="countText">3 шт.</span>
                        </div>
                        <div class="cartPage__desctop__td__price">
                            <div class="mobilePriceColLeft">
                                <p class="mobilePriceColLeft__priceCount">1 600 руб.</p>
                                <p class="mobilePriceColRight__priceCount"><b>3 200 руб.</b></p>
                            </div>
                        </div>
                    </form>
                    <form class="cartPage__desctop__td">
                        <div class="cartPage__desctop__td__img">
                            <img src="/img/small-pages/card-img-2.jpg" alt="">
                        </div>
                        <div class="cartPage__desctop__td__name">
                            <p>Артикул: 987-666</p>
                            <span>Коллекция Wine</span>
                        </div>
                        <div class="cartPage__desctop__td__count">
                            <span class="countText">3 шт.</span>
                        </div>
                        <div class="cartPage__desctop__td__price">
                            <div class="mobilePriceColLeft">
                                <p class="mobilePriceColLeft__priceCount">1 600 руб.</p>
                                <p class="mobilePriceColRight__priceCount"><b>3 200 руб.</b></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end mobile html-->
                <div class="cartPage__bottomSumm">
                    <div class="cartPage__bottomSumm__count">
                        <p>Общая стоимость:</p>
                        <b>8 600.00 руб.</b>
                    </div>
                    <div class="cartPage__bottomSumm__delivery">
                        <p>Доставка:</p>
                        <b>240.00 руб.</b>
                    </div>
                    <div class="cartPage__bottomSumm__summ">
                        <p><b>Итого:</b></p>
                        <b>8 840.00 руб.</b>
                    </div>
                </div>
                <div class="tabsSubmitButtonClearfix">
                    <a class="backToCard" href="#">Назад к корзине</a>
                    <a class="completeForm" href="#">Подтвердить заказ</a>
                </div>
            </div>
        </div>
    </div>

    <div class="checkPopup">
        <div class="checkPopup__cont">
            <i class="checkPopup__close">закрыть</i>
            <p class="checkPopup__cont__title">Спасибо за заказ</p>
            <p class="checkPopup__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit pariatur.</p>
            <div class="checkPopup__socialNetworks">
                <a href="#"><img src="/img/icons/svg/facebook.svg"></a>
                <a href="#"><img src="/img/icons/svg/vk.svg"></a>
                <a href="#"><img src="/img/icons/svg/insta.svg"></a>
                <a href="#"><img src="/img/icons/svg/ok.svg"></a>
            </div>
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>