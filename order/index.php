<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("���������� ������");
?>

<?$APPLICATION->IncludeComponent("bitrix:sale.order.ajax", "order", Array(
	"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
		"ADDITIONAL_PICT_PROP_11" => "-",	// �������������� �������� [�������� ������� �������]
		"ADDITIONAL_PICT_PROP_12" => "-",	// �������������� �������� [����� ����������� (�������� ������� �������)]
		"ADDITIONAL_PICT_PROP_15" => "-",	// �������������� �������� [Stenova ����]
		"ADDITIONAL_PICT_PROP_16" => "-",	// �������������� �������� [�������� ����������� (Stenova ����)]
		"ALLOW_APPEND_ORDER" => "Y",	// ��������� ��������� ����� �� ������������� ������������
		"ALLOW_AUTO_REGISTER" => "N",	// ��������� ����� � �������������� ������������ ������������
		"ALLOW_NEW_PROFILE" => "N",	// ��������� ��������� �������� �����������
		"ALLOW_USER_PROFILES" => "N",	// ��������� ������������� �������� �����������
		"BASKET_IMAGES_SCALING" => "adaptive",	// ����� ����������� ����������� �������
		"BASKET_POSITION" => "after",	// ������������ ������ �������
		"COMPATIBLE_MODE" => "Y",	// ����� ������������� ��� ����������� �������
		"DELIVERIES_PER_PAGE" => "9",	// ���������� �������� �� ��������
		"DELIVERY_FADE_EXTRA_SERVICES" => "N",	// �������������� ������, ������� ����� �������� � ���������� (���������) �����
		"DELIVERY_NO_AJAX" => "N",	// ����� ����������� �������� � �������� ��������� �������
		"DELIVERY_NO_SESSION" => "Y",	// ��������� ������ ��� ���������� ������
		"DELIVERY_TO_PAYSYSTEM" => "d2p",	// ������������������ ����������
		"DISABLE_BASKET_REDIRECT" => "N",	// ���������� �� �������� ���������� ������, ���� ������ ������� ����
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",	// ��������� ������ � ����������� ����� ������ � ������ ������
		"PATH_TO_AUTH" => "/auth/",	// ���� � �������� �����������
		"PATH_TO_BASKET" => "basket.php",	// ���� � �������� �������
		"PATH_TO_PAYMENT" => "payment.php",	// �������� ����������� ��������� �������
		"PATH_TO_PERSONAL" => "index.php",	// ���� � �������� ������������� �������
		"PAY_FROM_ACCOUNT" => "N",	// ��������� ������ � ����������� �����
		"PAY_SYSTEMS_PER_PAGE" => "9",	// ���������� ��������� ������ �� ��������
		"PICKUPS_PER_PAGE" => "5",	// ���������� ������� ���������� �� ��������
		"PRODUCT_COLUMNS_HIDDEN" => "",	// �������� ������� ������������ � ��������� ���� � ������ �������
		"PRODUCT_COLUMNS_VISIBLE" => array(	// ��������� ������� ������� ������ �������
			0 => "PREVIEW_PICTURE",
			1 => "PROPS",
		),
		"SEND_NEW_USER_NOTIFY" => "Y",	// ���������� ������������ ������, ��� �� ��������������� �� �����
		"SERVICES_IMAGES_SCALING" => "adaptive",	// ����� ����������� ��������������� �����������
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"SHOW_BASKET_HEADERS" => "N",	// ���������� ��������� ������� ������ �������
		"SHOW_COUPONS_BASKET" => "Y",	// ���������� ���� ����� ������� � ����� ������ �������
		"SHOW_COUPONS_DELIVERY" => "Y",	// ���������� ���� ����� ������� � ����� ��������
		"SHOW_COUPONS_PAY_SYSTEM" => "Y",	// ���������� ���� ����� ������� � ����� ������
		"SHOW_DELIVERY_INFO_NAME" => "Y",	// ���������� �������� � ����� ���������� �� ��������
		"SHOW_DELIVERY_LIST_NAMES" => "Y",	// ���������� �������� � ������ ��������
		"SHOW_DELIVERY_PARENT_NAMES" => "Y",	// ���������� �������� ������������ ��������
		"SHOW_MAP_IN_PROPS" => "N",	// ���������� ����� � ����� ������� ������
		"SHOW_NEAREST_PICKUP" => "N",	// ���������� ��������� ������ ����������
		"SHOW_NOT_CALCULATED_DELIVERIES" => "L",	// ����������� �������� � �������� �������
		"SHOW_ORDER_BUTTON" => "final_step",	// ���������� ������ ���������� ������ (��� ���������������� �������������)
		"SHOW_PAY_SYSTEM_INFO_NAME" => "Y",	// ���������� �������� � ����� ���������� �� ��������� �������
		"SHOW_PAY_SYSTEM_LIST_NAMES" => "Y",	// ���������� �������� � ������ ��������� ������
		"SHOW_PICKUP_MAP" => "Y",	// ���������� ����� ��� �������� � �����������
		"SHOW_STORES_IMAGES" => "Y",	// ���������� ����������� ������� � ���� ������ ������ ������
		"SHOW_TOTAL_ORDER_BUTTON" => "N",	// ���������� �������������� ������ ���������� ������
		"SHOW_VAT_PRICE" => "Y",	// ���������� �������� ���
		"SKIP_USELESS_BLOCK" => "Y",	// ���������� ����, � ������� ���� ������� ��� ������
		"TEMPLATE_LOCATION" => "popup",	// ���������� ��� �������� ������ ��������������
		"TEMPLATE_THEME" => "site",	// �������� ����
		"USER_CONSENT" => "N",	// ����������� ��������
		"USER_CONSENT_ID" => "0",	// ����������
		"USER_CONSENT_IS_CHECKED" => "Y",	// ����� �� ��������� �����������
		"USER_CONSENT_IS_LOADED" => "N",	// ��������� ����� �����
		"USE_CUSTOM_ADDITIONAL_MESSAGES" => "N",	// �������� ����������� ����� �� ����
		"USE_CUSTOM_ERROR_MESSAGES" => "N",	// �������� ����������� ����� �� ����
		"USE_CUSTOM_MAIN_MESSAGES" => "N",	// �������� ����������� ����� �� ����
		"USE_ENHANCED_ECOMMERCE" => "N",	// ���������� ������ ����������� �������� � Google � ������
		"USE_PRELOAD" => "Y",	// �������������� ������ � �������� �� ����������� ������
		"USE_PREPAYMENT" => "N",	// ������������ ��������������� ��� ���������� ������ (PayPal Express Checkout)
		"USE_YM_GOALS" => "N",	// ������������ ���� �������� ������.�������
	),
	false
);?>


    <div class="wrap-lg checkPage">
        <h1 class="checkPage__title single-title">���������� ������ � � 35695</h1>
        <div class="checkPage__stepsCont">
            <div class="checkPage__stepsCont__step-1">
                <div class="stapItemTitle"><b>��� <i>1:</i></b> ��������� ����������</div>
                <!--������ ����� � ������ � ���� ������������ �����-->
                <form action="">
                    <div class="tabs__content active" >
                        <div class="tabs__content__formWrap" >
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">�������</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">���</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">����� ��������</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input class="telMask" type="text">
                                </div>
                            </div>
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">E-mail �����</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="profile__tabs__item requireTextBlock">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">��������������</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                    <p>��� ���� ������������ ��� ����������</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabsSubmitButtonClearfix">
                        <input type="submit" value="����������">
                    </div>
                </form>
            </div>
            <!--step 2 :(-->
            <div class="stapItemTitle"><b>��� <i>2:</i></b> ��������</div>
            <form action="" class="">
                <div class="checkPage__step-2 tabs__content active">
                    <div class="tabs__content__formWrap" >
                        <div class="profile__tabs__item profile__tabs__item--radioBlock">
                            <div class="profile__tabs__item__leftLabel"></div>
                            <div class="profile__tabs__item__rightContent">
                                <span>������� ��������</span>
                                <div class="profile__tabs__item__labelBlock">
                                    <input id="radio-1" name="nameRadio" type="radio">
                                    <label for="radio-1">��������� �� ������ ��������</label>
                                    <input id="radio-2" name="nameRadio" type="radio">
                                    <label for="radio-2">���������� ��������</label>
                                </div>
                            </div>
                        </div>
                        <span class="checkPage__step-2__title">����� ��������</span>
                        <div class="profile__tabs__item">
                            <div class="profile__tabs__item__leftLabel">
                                <label for="">�����</label>
                            </div>
                            <div class="profile__tabs__item__rightContent">
                                <input type="text">
                            </div>
                        </div>
                        <div class="profile__tabs__item">
                            <div class="profile__tabs__item__leftLabel">
                                <label for="">�����</label>
                            </div>
                            <div class="profile__tabs__item__rightContent">
                                <input type="text">
                            </div>
                        </div>
                        <div class="checkPage__step-2__contsHalfPast">
                            <div class="profile__tabs__item">
                                <div class="profile__tabs__item__leftLabel">
                                    <label for="">����� ����</label>
                                </div>
                                <div class="profile__tabs__item__rightContent">
                                    <input type="text">
                                    <div class="profile__tabs__item__leftLabel">
                                        <label for="">������, �������� </label>
                                    </div>
                                    <div class="profile__tabs__item__rightContent">
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile__tabs__item">
                            <div class="profile__tabs__item__leftLabel">
                                <label for="">����� ��������</label>
                            </div>
                            <div class="profile__tabs__item__rightContent">
                                <input type="text">
                            </div>
                        </div>
                        <div class="profile__tabs__item">
                            <div class="profile__tabs__item__leftLabel">
                                <label for="">�������� ������</label>
                            </div>
                            <div class="profile__tabs__item__rightContent">
                                <input type="text">
                            </div>
                        </div>
                        <div class="profile__tabs__item requireTextBlock">
                            <div class="profile__tabs__item__leftLabel"></div>
                            <div class="profile__tabs__item__rightContent">
                                <p>��� ���� ������������ ��� ����������</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabsSubmitButtonClearfix checkPage__step-2_button">
                    <input type="submit" value="���������">
                </div>
            </form>
            <!--step 3 :(-->
            <div class="stapItemTitle"><b>��� <i>3:</i></b> ������� ������</div>
            <form class="checkPage__step-3 tabs__content active">
                <div class="profile__tabs__item profile__tabs__item--radioBlock">
                    <div class="profile__tabs__item__leftLabel"></div>
                    <div class="profile__tabs__item__rightContent">
                        <div class="profile__tabs__item__labelBlock">
                            <input checked id="radio-11" name="nameRadio" type="radio">
                            <label for="radio-11">100% ���������� �� ����� ������ �����</label>
                            <input id="radio-12" name="nameRadio" type="radio">
                            <label for="radio-12">��������� ���������� (��� ����������� ���)</label>
                        </div>
                    </div>
                </div>
                <div class="tabsSubmitButtonClearfix">
                    <input type="submit" value="���������">
                </div>
            </form>
            <!-- step 4 :((((  ��� � ������-->
            <div class="stapItemTitle"><b>��� <i>4: </i></b>���� �������</div>
            <div class="checkPage__step-4 tabs__content active">
                <div class=" cartPage__desctop">
                    <div class="cartPage__desctop__th">
                        <div class="cartPage__desctop__th__name">�����</div>
                        <div class="cartPage__desctop__th__price">���� �� ��.</div>
                        <div class="cartPage__desctop__th__count">����������</div>
                        <div class="cartPage__desctop__th__summ">�����</div>
                    </div><!--first product-->
                    <form class="cartPage__desctop__td">
                        <div class="cartPage__desctop__td__img">
                            <img src="/img/small-pages/card-img-1.jpg" alt="">
                        </div>
                        <div class="cartPage__desctop__td__name">
                            <p>�������: 987-666</p>
                            <span>��������� Wine<br> ������: 1,06 x 10,5 �.</span>
                        </div>
                        <div class="cartPage__desctop__td__price">
                            <p>1 800.00 ���.</p>
                        </div>
                        <div class="cartPage__desctop__td__count">
                            <input type="number" value="3">
                        </div>
                        <div class="cartPage__desctop__td__summ">
                            <b>5 400.00 ���.</b>
                        </div>
                    </form><!--second product-->
                    <form class="cartPage__desctop__td">
                        <div class="cartPage__desctop__td__img">
                            <img src="/img/small-pages/card-img-2.jpg" alt="">
                        </div>
                        <div class="cartPage__desctop__td__name">
                            <p>�������: 987-666</p>
                            <span>��������� Wine <br>������: 1,06 x 10,5 �.</span>
                        </div>
                        <div class="cartPage__desctop__td__price">
                            <p>1 800.00 ���.</p>
                        </div>
                        <div class="cartPage__desctop__td__count">
                            <input type="number" value="3">
                        </div>
                        <div class="cartPage__desctop__td__summ">
                            <b>5 400.00 ���.</b>
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
                            <p>�������: 987-666</p>
                            <span>��������� Wine</span>
                        </div>
                        <div class="cartPage__desctop__td__count">
                            <span class="countText">3 ��.</span>
                        </div>
                        <div class="cartPage__desctop__td__price">
                            <div class="mobilePriceColLeft">
                                <p class="mobilePriceColLeft__priceCount">1 600 ���.</p>
                                <p class="mobilePriceColRight__priceCount"><b>3 200 ���.</b></p>
                            </div>
                        </div>
                    </form>
                    <form class="cartPage__desctop__td">
                        <div class="cartPage__desctop__td__img">
                            <img src="/img/small-pages/card-img-2.jpg" alt="">
                        </div>
                        <div class="cartPage__desctop__td__name">
                            <p>�������: 987-666</p>
                            <span>��������� Wine</span>
                        </div>
                        <div class="cartPage__desctop__td__count">
                            <span class="countText">3 ��.</span>
                        </div>
                        <div class="cartPage__desctop__td__price">
                            <div class="mobilePriceColLeft">
                                <p class="mobilePriceColLeft__priceCount">1 600 ���.</p>
                                <p class="mobilePriceColRight__priceCount"><b>3 200 ���.</b></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end mobile html-->
                <div class="cartPage__bottomSumm">
                    <div class="cartPage__bottomSumm__count">
                        <p>����� ���������:</p>
                        <b>8 600.00 ���.</b>
                    </div>
                    <div class="cartPage__bottomSumm__delivery">
                        <p>��������:</p>
                        <b>240.00 ���.</b>
                    </div>
                    <div class="cartPage__bottomSumm__summ">
                        <p><b>�����:</b></p>
                        <b>8 840.00 ���.</b>
                    </div>
                </div>
                <div class="tabsSubmitButtonClearfix">
                    <a class="backToCard" href="#">����� � �������</a>
                    <a class="completeForm" href="#">����������� �����</a>
                </div>
            </div>
        </div>
    </div>

    <div class="checkPopup">
        <div class="checkPopup__cont">
            <i class="checkPopup__close">�������</i>
            <p class="checkPopup__cont__title">������� �� �����</p>
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