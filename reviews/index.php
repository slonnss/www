<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>
<? IncludeTemplateLangFile(__FILE__); ?> 
    <div class="wrap-lg testimonials">
        <h1 class="testimonials__title single-title">Отзывы покупателей</h1>
        <div class="testimonials__wrap">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "reviews-list",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "SORT",
                        2 => "DETAIL_TEXT",
                        3 => "DATE_ACTIVE_FROM",
                        4 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "7",
                    "IBLOCK_TYPE" => "reviews",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "reviews_city",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "reviews-list"
                ),
                false
            ); ?>

            <div class="testimonials__wrap__colRight">
                <div class="testimonials__wrap__colRight__item">
                    <span class="testimonials__wrap__colRight__item__title"><?= GetMessage('REVIEWS_FORM_TITLE'); ?></span>
                    <p><? $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/reviews/index_form_text.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                            false
                        ); ?></p>
                    <a class="testimonials__wrap__colRight__item__link"
                       href="#"><?= GetMessage('REVIEWS_FORM_BUTTON'); ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials__form">
        <div class="testimonials__form__overlay"></div>
        <div class="testimonials__form__wrap">
            <form id="testimotionals_form">
                <span class="closeIcon"></span>
                <div id="testimotionals_form_content">
                    <h2><?= GetMessage('REVIEWS_FORM_TITLE'); ?></h2>
                    <input type="hidden" id="site_lang" name="site_lang" value="<?= LANGUAGE_ID ?>">
                    <div class="testimonials__form__wrap__input">
                        <input type="text" id="fio" name="fio" placeholder="Фамилия Имя">
                    </div>
                    <div class="testimonials__form__wrap__input">
                        <input type="text" id="city" name="city" placeholder="Город">
                    </div>
                    <div class="testimonials__form__wrap__input">
                        <textarea id="testimonials" name="testimonials" placeholder="Текст отзыва"></textarea>
                    </div>
                    <div class="testimonials__form__wrap__input">
                        <input type="submit" id="testimonials__form__submit_form" value="Отправить отзыв">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
if($APPLICATION->GetCurPage(false) == "/reviews/"){
?>
    <script>
        BX.message({SITE_ID: '<?= LANGUAGE_ID ?>'});
        <?php
        $rsLang = CLanguage::GetList($by="lid", $order="desc", Array("NAME" => "russian"));
        while ($arLang = $rsLang->Fetch()) { ?>
        BX.message({<?= $arLang['LID'] ?>__FIO: '<?= GetMessage('ru__FIO') ?>'});
        BX.message({<?= $arLang['LID'] ?>__CITY: '<?= GetMessage('ru__CITY') ?>' });
        BX.message({<?= $arLang['LID'] ?>__TESTIMONIALS: '<?= GetMessage('ru__TESTIMONIALS') ?>' });
        BX.message({<?= $arLang['LID'] ?>__SUCCESS: '<?= GetMessage('ru__SUCCESS') ?>' });
        <?php } ?>
    </script>
    <?php } ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>