<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("���������, ������� � ����� ������");
?>
    <div class="wrap-lg returnsPage">
    <div class="returnsPage__title">
        <h1 class="single-title">���������, ������� � ����� ������</h1>
    </div>

    <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"return_products", 
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
			1 => "DETAIL_TEXT",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "claims_returns",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "�������",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
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
		"COMPONENT_TEMPLATE" => "return_products"
	),
	false
); ?>


    <div class="returnsPage__form">
        <div class="returnsPage__form__title">
            <p>�������� ���������</p>
        </div>
        <form action="" class="returnsPage__form__wrapper">
            <div class="returnsPage__form__input returnsPage__form__input--half">
                <label for="second-name"><sup>*</sup>�������</label>
                <input type="text" name="second-name" value="">
            </div>
            <div class="returnsPage__form__input returnsPage__form__input--half">
                <label for="first-name"><sup>*</sup>���</label>
                <input type="text" name="first-name" value="">
            </div>
            <div class="returnsPage__form__input returnsPage__form__input--half">
                <label for="phone">����� ��������</label>
                <input type="text" name="phone" value="">
            </div>
            <div class="returnsPage__form__input returnsPage__form__input--half">
                <label for="attachment">��������� ����</label>
                <div class="inputFile">
                    <input type="file" name="attachment" value="">
                    <div class="inputFile__button">���������</div>
                </div>
            </div>
            <div class="returnsPage__form__input returnsPage__form__input--half">
                <label for="mail">E-mail</label>
                <input type="text" name="mail" value="">
            </div>
            <div class="returnsPage__form__input returnsPage__form__input--full">
                <label for="message">����� ���������</label>
                <textarea name="message" placeholder="������� ����� ������, �� ����� 500 ������"></textarea>
            </div>
            <div class="returnsPage__form__input returnsPage__form__input--full">
                <input type="submit" name="" value="���������">
            </div>
        </form>
    </div>
    </div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>