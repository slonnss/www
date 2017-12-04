<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Спецпредложения");
?>

    <div class="specialOffers__container">
        <div class="specialOffers">

            <div class="sidebar leftColumn">

                <h2 class="pageTitle hidden visibleSM sidebarFilter ">Спецпредложения</h2>

                <div class="sidebar__filterElements" data-status="close">
                    <ul class="sidebar__menu">
                        <li>
                            <a href="/stenova-home/novinki/">Новинки</a>
                        </li>
                        <li>
                            <a href="/stenova-home/spetsialnye-predlozheniya/">Спецпредложения</a>
                        </li>
                    </ul>

                    <div class="filterBlock">
                        <label class="label">Коллекции</label>
                        <div id="filterSelect">
                            <select class="filterSelect">
                                <option>Стандарт</option>
                                <option>Стандарт2</option>
                                <option>Стандарт3</option>
                                <option>Стандарт4</option>
                                <option>Стандарт5</option>
                            </select>
                        </div>
                    </div>

                    <div class="filterBlock">
                        <label class="label">Дизайн</label>
                        <div class="checkboxArea">

                            <input id="cfirst" type="checkbox" name="first" hidden/>
                            <label for="cfirst">Kids collection</label>

                            <input id="cfirst2" type="checkbox" name="first" hidden/>
                            <label for="cfirst2">Геометрия</label>

                            <input id="cfirst3" type="checkbox" name="first" hidden/>
                            <label for="cfirst3">Классика</label>

                            <input id="cfirst4" type="checkbox" name="first" hidden/>
                            <label for="cfirst4">Тематические</label>

                            <input id="cfirst5" type="checkbox" name="first" hidden/>
                            <label for="cfirst5">Фотообои</label>

                            <input id="cfirst6" type="checkbox" name="first" hidden/>
                            <label for="cfirst6">С цветами</label>

                            <input id="cfirst7" type="checkbox" name="first" hidden/>
                            <label for="cfirst7">С рисунком</label>

                            <input id="cfirst8" type="checkbox" name="first" hidden/>
                            <label for="cfirst8">Однотонные</label>

                            <input id="cfirst9" type="checkbox" name="first" hidden/>
                            <label for="cfirst9">Все</label>

                        </div>
                    </div>

                    <div class="filterBlock">
                        <label class="label">Аксессуары</label>
                        <div class="checkboxArea">

                            <input id="akks" type="checkbox" name="first" hidden/>
                            <label for="akks">Футболки</label>

                            <input id="akks2" type="checkbox" name="first" hidden/>
                            <label for="akks2">Деспенсоры</label>

                            <input id="akks3" type="checkbox" name="first" hidden/>
                            <label for="akks3">Ручки</label>

                            <input id="akks4" type="checkbox" name="first" hidden/>
                            <label for="akks4">Тетради</label>

                            <input id="akks5" type="checkbox" name="first" hidden/>
                            <label for="akks5">Конфеты</label>

                            <input id="akks6" type="checkbox" name="first" hidden/>
                            <label for="akks6">Одежда</label>

                            <input id="akks7" type="checkbox" name="first" hidden/>
                            <label for="akks7">Все</label>
                        </div>
                    </div>

                    <div class="filterBlock">
                        <a href="#" class="clearFilter">Сбросить фильтр</a>
                    </div>
                </div>

            </div>
            <div class="specialOffers--list rightColumn">

                <h1 class="pageTitle hiddenSM single-title">Спецпредложения</h1>

                <?php
                $GLOBALS['specialOffers'] = array('ACTIVE' => 'Y', 'PROPERTY_stenova_home__special_offers_VALUE' => 'Да');
                ?>

                <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"home_special_offers",
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
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "specialOffers",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "catalog",
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
			0 => "stenova_home__special_offers",
			1 => "",
			2 => "",
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
		"COMPONENT_TEMPLATE" => "home_special_offers"
	),
	false
); ?>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>