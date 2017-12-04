<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$aMenuLinks = Array(
	Array(
        "Коллекции",
        "/oboi-stenova/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Спец. предложения",
        "/oboi-stenova/?filter[stenova_wallpaper__special_offers][]=on",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Новинки",
        "/oboi-stenova/?filter[stenova_wallpaper__new][]=on",
        Array(),
        Array(),
        ""
    ),
);
?>

<?php
/*CModule::IncludeModule("iblock");

$collectionListFilter = Array('IBLOCK_ID' => 15, 'GLOBAL_ACTIVE' => 'Y', "DEPTH_LEVEL" => 1);
$collectionLists = CIBlockSection::GetList(Array("sort" => "desc"), $collectionListFilter, true);

if ((int)$collectionLists->SelectedRowsCount() > 0) {
    while ($collection = $collectionLists->GetNext()) {
        $aMenuLinks[] = array(
            $collection['NAME'],
            "/oboi-stenova/?filter[collections_list]=" . $collection['ID'],
            Array(),
            Array(),
            ""
        );
    }
}*/
?>
