<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>

<? $APPLICATION->IncludeComponent(
    "bitrix:sale.basket.basket",
    "cart_page",
    array(
        "ACTION_VARIABLE" => "basketAction",
        "AUTO_CALCULATION" => "Y",
        "COLUMNS_LIST" => array(
            0 => "NAME",
            1 => "DELETE",
            2 => "PRICE",
            3 => "QUANTITY",
            4 => "SUM",
            5 => "PROPERTY_stenova_home__vendor_code",
            6 => "PROPERTY_stenova_wallpaper__vendor_code",
        ),
        "CORRECT_RATIO" => "N",
        "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
        "GIFTS_CONVERT_CURRENCY" => "N",
        "GIFTS_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_HIDE_NOT_AVAILABLE" => "N",
        "GIFTS_MESS_BTN_BUY" => "Выбрать",
        "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
        "GIFTS_PAGE_ELEMENT_COUNT" => "4",
        "GIFTS_PLACE" => "BOTTOM",
        "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
        "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
        "GIFTS_SHOW_IMAGE" => "Y",
        "GIFTS_SHOW_NAME" => "Y",
        "GIFTS_SHOW_OLD_PRICE" => "N",
        "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
        "HIDE_COUPON" => "Y",
        "OFFERS_PROPS" => array(
            0 => "PRICE_PLACE",
        ),
        "PATH_TO_ORDER" => "/order/",
        "PRICE_VAT_SHOW_VALUE" => "N",
        "QUANTITY_FLOAT" => "N",
        "SET_TITLE" => "Y",
        "TEMPLATE_THEME" => "",
        "USE_ENHANCED_ECOMMERCE" => "N",
        "USE_GIFTS" => "N",
        "USE_PREPAYMENT" => "N",
        "COMPONENT_TEMPLATE" => "cart_page"
    ),
    false
); ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>