<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>
    <div class="wrap-lg searchPage">
        <? $APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search-page", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "date",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "50",
		"RESTART" => "Y",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "Y",
		"arrFILTER" => array(
		),
		"arrWHERE" => array(
			0 => "forum",
			1 => "iblock_about_us",
			2 => "iblock_shopinshop",
			3 => "iblock_reviews",
			4 => "iblock_partners",
			5 => "iblock_news",
			6 => "iblock_history",
			7 => "iblock_gallery",
			8 => "iblock_claims_returns",
			9 => "iblock_catalog",
			10 => "iblock_slider",
			11 => "blog",
			12 => "socialnetwork",
			13 => "socialnetwork_user",
		),
		"COMPONENT_TEMPLATE" => "search-page"
	),
	false
); ?>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>